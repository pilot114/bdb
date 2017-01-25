<?php

include './vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

use Bdb\Client\ClientFactory;
use Bdb\Source;

$config = Yaml::parse(file_get_contents('./sources.yml'));

$client = new MongoDB\Client("mongodb://172.17.0.2:27017");
$sources = [];
foreach ($config as $name => $sourceConfig) {
	$client = ClientFactory::build($sourceConfig);
	$sources[$name] = new Source($name, $sourceConfig, $client);
}
// TODO: promise access
// TODO: abstract query
$clearData = [
	'csv_test' => $sources['csv_test']->get(['users']),
	'mongo_test' => $sources['mongo_test']->get(['star_type', 'planet_age']),
	'page_test' => $sources['page_test']->get(['price', 'name']),
];
var_dump($clearData);
