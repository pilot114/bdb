<?php

include './vendor/autoload.php';


use Bdb\Client\ClientFactory;
use Bdb\Processor\ProcessorFactory;
use Bdb\Source;

$url = null;
$selectors = null;

if (count($argv) > 1) {
	list($fileName, $url, $selectorsRaw) = $argv;

	$selectors = [];
	foreach (explode(',', $selectorsRaw) as $selector) {
		list($key, $val) = explode(':', $selector);
		$selectors[$key] = $val; 
	}
}

$sourceName = 'test';
$sourceConfig = [
	'description' => 'тестовый источник',
	'expire' => 'always',
	'type' => 'http',
	'format' => 'html',
	'url' => $url ?: 'https://habrahabr.ru/top',
	'datasets' => $selectors ?: ['headers' => '.post__title_link']
];

$client = ClientFactory::build($sourceConfig['type']);
$proccessor = ProcessorFactory::build($sourceConfig['format']);

$source = (new Source($sourceConfig))
	->setName($sourceName)
	->setClient($client)
	->setProccessor($proccessor);

$source->get();
echo $source;
