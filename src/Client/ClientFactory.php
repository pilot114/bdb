<?php

namespace Bdb\Client;

class ClientFactory
{
	public static function build(string $type)
	{
		if ($type == 'http') {
			return new Http();
		}
		if ($type == 'mongo') {
			return new Mongo();
		}
		throw new Exception("Unknown client type: " . print_r($type, true), 1);
	}
}
