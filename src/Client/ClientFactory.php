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
		list($sourceType, $sourceFormat, $cacheFormat) = $config['type'];

		if ($type == ['file', 'html']) {
			return new PageClient($config);
		}
		if ($type == ['file', 'csv']) {
			return new CsvClient($config);
		}
		if ($sourceType == 'mongo') {
			return new MongoClient($config);
		}
		throw new Exception("Unknown client type: " . print_r($type, true), 1);
	}
}
