<?php

include './vendor/autoload.php';

use PhpParser\Error;
use PhpParser\ParserFactory;

$code = file_get_contents('./bin/Example.php');
$parser = (new ParserFactory)->create(ParserFactory::PREFER_PHP7);

try {
    $stmts = $parser->parse($code);
} catch (Error $e) {
    echo 'Parse Error: ', $e->getMessage();
}
var_dump($stmts);
