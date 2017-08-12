<?php

namespace Bdb;

/*
Source - источник данных (датасетов)
Контролирует, откуда и как они будут получены.

$source = new Source('wiki', CONFIG, CLIENT);
или если нужно брать только из кэша
$source = new Source('wiki', CONFIG, CLIENT, true);

принудительно закешировать данные
$source->download();

получить датасеты
$datasets = $source->get(['field_1', 'field_2']);

*/

class Source
{
	const TEMP_DIR = '/tmp/big_data_boss/';

	private $config;
	private $client;
	private $onlyCache;
	private $expired = true;
	private $tempDir;
	private $hash;

	function __construct($name, $config, $client, $onlyCache = false)
	{
		$this->config = $config;
		$this->client = $client;
		$this->cacher = new FileCacher();
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

	private function getLastUpdateTs()
	{
		$files = scandir($this->tempDir);
		return array_pop($files);
	}
	private function getExpireSec($expire)
	{
		if ($expire == 'always') {
			return 0;
		}
		if ($expire == 'never') {
			return 3600*24*365*7600000000;
		}

		list($number, $interval) = preg_split('/(?<=[0-9])(?=[a-z]+)/i', $expire);
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
		стягивает данные из источника и сохраняет в одном из удобочитаемых
		для $this->client форматов в темповой директории
		вызывается явно или скрыто, если данные просрочены
	*/
	public function download()
	{
		$data = $this->client->downloadData();
		file_put_contents($this->tempDir . '/' . time(), $data);
		$this->expired = false;
	}

	/*
		запрос на получение датасетов
		@return array
	*/
	public function get($query)
	{
		if ($this->expired && !$this->onlyCache) {
			$this->download();
		}
		$data = file_get_contents($this->tempDir . '/'. $this->getLastUpdateTs());

		$clientQuery = [];
		foreach ($query as $fieldName) {
			$clientQuery[$fieldName] = $this->config['selectors'][$fieldName];
		}
		return $this->client->filterData($data, $clientQuery);
	}
}
