<?php

namespace Bdb\Client;

use \MongoDB\Client as mClient;

use MongoDB\Collection;
use MongoDB\Driver\Cursor;

class MongoClient implements iClient
{
	private $transport;
	private $config;

	function __construct($config)
	{
		$this->transport = new mClient($config['url']);
		$this->config = $config;
	}

	public function downloadData()
	{
		$data = [];
		foreach ($this->config['selectors'] as $name => $selector) {
			list($dbName, $colName, $field) = $selector;
			$col = $this->transport->$dbName->$colName;

			// var_dump($col->count());
			$data[$name] = [];
			$docs = $col->find()->toArray();
			foreach ($docs as $doc) {
				$data[$name][] = $doc->$field ?: '';
			}
		}
		return json_encode($data);
	}

	public function filterData($data, $clientQuery)
	{
		$data = json_decode($data, true);
		$result = [];
		foreach ($data as $name => $dataSet) {
			if (in_array($name, $clientQuery)) {
				$result[$name] = $dataSet;
			}
		}
		return $data;
	}
}