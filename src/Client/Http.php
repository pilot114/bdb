<?php

namespace Bdb\Client;

use \GuzzleHttp\Client as GuzzleClient;

class Http
{
	private $transport;

	function __construct()
	{
		$this->transport = new GuzzleClient();
	}

	public function downloadData($url)
	{
		$res = $this->transport->request('GET', $url);
		return (string)$res->getBody();
	}
}