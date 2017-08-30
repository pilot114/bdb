<?php

namespace Bdb;

/*
Source - источник данных (датасетов)

$source = new Source($config);
или если нужно брать только из кэша
$source = new Source($config, $onlyCache = true);

принудительно закешировать данные
$source->pull();

получить датасеты
$datasets = $source->get(['field_1', 'field_2']);
или все сразу
$datasets = $source->get();

вывести отладочную информацию
echo $source;
*/

class Source
{
	const TEMP_DIR_BASE = '/tmp/bdb';

	private $config;
	private $client;
	private $proccessor;

	private $onlyCache;
	private $expired = true;
	private $tempDir;
	private $hash;

	private $result;
	private $fromCache = true;

	public function __construct($config, $onlyCache = false)
	{
		$this->config = $config;
		$this->onlyCache = $onlyCache;

		if (!is_dir(self::TEMP_DIR_BASE)) {
			mkdir(self::TEMP_DIR_BASE);
		}
	}

	public function __toString()
	{
		// имя и описание источника
		$output = sprintf("*** %s : %s ***\n", $this->getName(), $this->getDescription());

		// имя и возраст кэша
		$ts = $this->getLastUpdateTs();
		$freshness = (time() - $ts) / 60;
		$output .= sprintf("%s (%d min)\n", $this->tempDir . '/' . $ts, $freshness);

		// откуда получены данные
		$output .= sprintf("Из кэша: %s\n", $this->fromCache ? 'true' : 'false');
		return $output;
	}

	public function getDescription()
	{
		return $this->config['description'];
	}

	public function setName($name)
	{
		$this->name = $name;

		$this->tempDir = self::TEMP_DIR_BASE . '/' . $name;
		if (!is_dir($this->tempDir)) {
			mkdir($this->tempDir);
		}

		return $this;
	}
	public function getName()
	{
		return $this->name;
	}

	public function setClient($client)
	{
		$this->client = $client;
		return $this;
	}
	public function getClient()
	{
		return $this->client;
	}

	public function setProccessor($proccessor)
	{
		$this->proccessor = $proccessor;
		return $this;
	}
	public function getProccessor()
	{
		return $this->proccessor;
	}

	/*
	 *	стягивает данные из источника и сохраняет в темповой директории.
	 *	вызывается явно или скрыто, если данные просрочены
	 */
	public function pull()
	{
		$batch = $this->client->downloadData($this->config['url']);
		if (!is_dir($this->tempDir . '/' . time())) {
			mkdir($this->tempDir . '/' . time());
		}

		foreach ($batch as $i => $data) {
			$fileName = $this->tempDir . '/' . time() . '/' . $i;
			file_put_contents($fileName, $data);
		}
		$this->expired = false;
	}

	public function isNeedUpdate()
	{
		return $this->expired && !$this->onlyCache;
	}

	/*
	 *	запрос на получение датасетов
	 */
	public function get(array $query = []) : array
	{
		$lastUpdateTs = $this->getLastUpdateTs();
		$getExpireSec = $this->getExpireSec($this->config['expire']);

		if (time() < ($lastUpdateTs + $getExpireSec)) {
			$this->expired = false;
		}

		// обновляем кэш
		if ($this->isNeedUpdate()) {
			$this->pull();
		}

		$dataDir = $this->tempDir . '/'. $this->getLastUpdateTs();
		$files = $this->getContentDir($dataDir);

		// данные в том виде, в котором они были скачаны
		$rawData = [];
		foreach ($files as $file) {
			$rawData[] = file_get_contents($dataDir . '/' . $file);
		}

		$clientQuery = [];
		foreach ($query as $fieldName) {

			if (!array_key_exists($fieldName, $this->config['datasets'])) {
				throw new \Exception(sprintf("Не найден датасет %s в источнике %s", $fieldName, $this->getName()), 1);
			}

			$clientQuery[$fieldName] = $this->config['datasets'][$fieldName];
		}
		if (!$clientQuery) {
			$clientQuery = $this->config['datasets'];
		}

		// TODO: подумать, как можно упростить
		$result = [];
		foreach ($rawData as $item) {
			$prepareItem = $this->proccessor->filterData($item, $clientQuery);

			foreach ($prepareItem as $datasetName => $dataset) {
				if (!isset($result[$datasetName])) {
					$result[$datasetName] = [];
				}
				$result[$datasetName] = array_merge($result[$datasetName], $dataset);
			}
		}
		$this->result = $result;
		return $result; 
	}

	private function getContentDir(string $dir) : array
	{
		$fileNames = scandir($dir);

		return array_filter($fileNames, function($v) {
			return $v !== '.' && $v !== '..';
		});
	}

	private function getLastUpdateTs() : int
	{
		$dirs = $this->getContentDir($this->tempDir);
		$lastDir = array_pop($dirs);
		return (int)$lastDir;
	}
	
	private function getExpireSec(string $expire) : int
	{
		if ($expire == 'always') {
			return 0;
		}
		// через 7,6 миллиардов лет Солнце вступит в фазу "Красного гиганта" и уничтожит земную жизнь, в том виде как мы ее знаем
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
}
