<?php

include './vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

use Bdb\Client\ClientFactory;
use Bdb\Processor\ProcessorFactory;
use Bdb\Source;

$config = Yaml::parse(file_get_contents('./conf/sources/inet.yml'));
//$workers = Yaml::parse(file_get_contents('./conf/http.yml'));

$sources = [];
foreach ($config as $name => $sourceConfig) {
	$client = ClientFactory::build($sourceConfig['type']);
	$processor = ProcessorFactory::build($sourceConfig['format']);

	$sources[$name] = (new Source($sourceConfig, $name))
		->setClient($client)
		->setProcessor($processor);
}

foreach ($sources as $name => $source) {
	echo $source;
	$datasets = $source->get();
	foreach ($datasets as $datasetName => $dataset) {
	    echo sprintf("### %s\n", $datasetName);
        foreach ($dataset as $item) {
            echo $item . "\n";
	    }
    }
}
