<?php

namespace Bdb\Client;

use \GuzzleHttp\Client as GuzzleClient;
use \PHPHtmlParser\Dom;

class Http
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

	public function filterData($data, $selectors)
	{
		$dom = new Dom;
		$dom->load($data);
		$result = [];
		foreach ($selectors as $name => $selector) {
			$result[$name] = [];
			foreach ($dom->find($selector) as $find) {
				$result[$name][] = $find->text();
			}
		}
		return $result;
	}
}