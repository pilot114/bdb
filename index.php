<?php

include './vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

use Bdb\Client\ClientFactory;
use Bdb\Processor\ProcessorFactory;
use Bdb\Source;

$config = Yaml::parse(file_get_contents('./sources/test.yml'));

$sources = [];
foreach ($config as $name => $sourceConfig) {
	$client = ClientFactory::build($sourceConfig['type']);
	$proccessor = ProcessorFactory::build($sourceConfig['format']);

	$sources[$name] = (new Source($sourceConfig))
		->setName($name)
		->setClient($client)
		->setProccessor($proccessor);
}

foreach ($sources as $name => $source) {
	echo "*** $name ***\n";
	$id_names = $source->get(['id_name'])['id_name'];
	var_dump(implode(',', $id_names));
	die();
}
