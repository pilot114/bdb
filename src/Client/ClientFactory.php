<?php

namespace Bdb\Client;

class ClientFactory
{
	/*
		api - with params and pretty data formats
		file - download and, maybe, transform
		db - import datasets
	*/
	public static function build($config)
	{
		$type = $config['type'];

		if ($type == ['file', 'html']) {
			return new PageClient($config);
		}
		if ($type == ['file', 'csv']) {
			return new CsvClient($config);
		}
		if ($type == ['db', 'mongo']) {
			return new MongoClient($config);
		}
		return null;
	}
}
