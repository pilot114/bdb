<?php

namespace Bdb\Client;

use \GuzzleHttp\Client as GuzzleClient;
use \PHPHtmlParser\Dom;

class CsvClient implements iClient
{
	private $transport;
	private $config;

	function __construct($config)
	{
		$this->transport = new GuzzleClient();
		$this->config = $config;
	}

	public function downloadData()
	{
		$res = $this->transport->request('GET', $this->config['url']);
		return (string)$res->getBody();
	}

	public function filterData($data, $clientQuery)
	{
		$dom = new Dom;
		$dom->load($data);
		$result = [];
		foreach ($clientQuery as $name => $selector) {
			$result[$name] = [];
			foreach ($dom->find($selector) as $find) {
				$result[$name][] = $find->text();
			}
		}
		return $result;
	}
}