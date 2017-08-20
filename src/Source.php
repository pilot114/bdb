<?php

namespace Bdb;

/*
Source - источник данных (датасетов)

$source = new Source($config);
или если нужно брать только из кэша
$source = new Source($config, true);

принудительно закешировать данные
$source->pull();

получить датасеты
$datasets = $source->get(['field_1', 'field_2']);
или все сразу
$datasets = $source->get();

*/

class Source
{
	const TEMP_DIR = '/tmp/bdb/';

	private $config;
	private $client;
	private $proccessor;

	private $onlyCache;
	private $expired = true;
	private $tempDir;
	private $hash;

	function __construct($config, $onlyCache = false)
	{
		$this->config = $config;
		$this->client = $client;
		$this->onlyCache = $onlyCache;

		$this->tempDir = self::TEMP_DIR . $name;
		if (!is_dir($this->tempDir)) {
			if (!is_dir(self::TEMP_DIR)) {
				mkdir(self::TEMP_DIR);
			}
			mkdir($this->tempDir);
		}

		$lastUpdateTs = $this->getLastUpdateTs();
		$getExpireSec = $this->getExpireSec($config['expire']);
		if (time() < ($lastUpdateTs + $getExpireSec)) {
			$this->expired = false;
		}
	}

	private function getLastUpdateTs() : int
	{
		$fileNames = scandir($this->tempDir);
		$fileNames = array_filter($fileNames, function($v) {
			return $v !== '.' && $v !== '..';
		});
		$lastFile = array_pop($fileNames);
		return (int)$lastFile;
	}
	
	private function getExpireSec(string $expire) : int
	{
		if ($expire == 'always') {
			return 0;
		}
		// через 7,6 миллиардов лет Солнце вступит в фазу «Красного гиганта» и уничтожит земную жизнь, в том виде как мы ее знаем
		if ($expire == 'never') {
			return 3600*24*365*7600000000;
		}

		[$number, $interval] = preg_split('/(?<=[0-9])(?=[a-z]+)/i', $expire);
		$intervals = [
			's'=>1,
			'm'=>60,
			'h'=>3600,
			'd'=>3600*24,
			'w'=>3600*24*7,
			'M'=>3600*24*30,
			'Y'=>3600*24*365,
		];
		return $number * $intervals[$interval];
	}

	/*
		стягивает данные из источника и сохраняет в json в темповой директории.
		вызывается явно или скрыто, если данные просрочены
	*/
	public function pull()
	{
		$data = $this->client->downloadData();
		file_put_contents($this->tempDir . '/' . time(), $data);
		$this->expired = false;
	}

	/*
		запрос на получение датасетов
	*/
	public function get(array $query = []) : array
	{
		// обновляем кэш
		if ($this->expired && !$this->onlyCache) {
			$this->pull();
		}
		$data = file_get_contents($this->tempDir . '/'. $this->getLastUpdateTs());

		$clientQuery = [];
		foreach ($query as $fieldName) {
			$clientQuery[$fieldName] = $this->config['datasets'][$fieldName];
		}
		return $this->client->filterData($data, $clientQuery);
	}
}
