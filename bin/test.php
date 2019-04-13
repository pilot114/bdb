<?php

/**
 * Пример получения данных из внешнего источника
 */

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
    'expire' => '3m',
    'type' => 'http',
    'format' => 'html',
    'url' => $url ?: 'https://habrahabr.ru/top',
    'datasets' => $selectors ?: ['headers' => '.post__title_link']
];

$client = ClientFactory::build($sourceConfig['type']);
$processor = ProcessorFactory::build($sourceConfig['format']);

$source = (new Source($sourceConfig, $sourceName))
    ->setClient($client)
    ->setProcessor($processor);

var_dump($source->get());
echo $source;
