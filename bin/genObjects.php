<?php

include './vendor/autoload.php';

use PhpParser\BuilderFactory;
use PhpParser\PrettyPrinter;
use PhpParser\Node;

$apiData = file_get_contents('./vendor/vkcom/vk-api-schema/objects.json');
$objects = json_decode($apiData, true)['definitions'];


function getObjectName($inputNode)
{
    $refName = str_replace('#/definitions/', '', $inputNode['$ref']);
    return str_replace('objects.json', '', $refName);
}

function normalizeObjectName($objectName)
{
    $words = explode('_', $objectName);
    foreach ($words as $i => $word) {
        $words[$i] = ucfirst($word);
    }
    return implode('', $words);
}

/**
 * @param $path
 * @param $inputNode
 * @param $collection
 * @return array
 */
function resolveObjectRef($inputNode, $collection)
{
    $refName = getObjectName($inputNode);
    return $collection[$refName];
}

$factory = new BuilderFactory();
$prettyPrinter = new PrettyPrinter\Standard();


foreach ($objects as $objectName => $object) {
    $className = normalizeObjectName($objectName);

    if (!isset($object['type'])) {
        var_dump($object);
    }
//    if (!isset($object['type']) || $object['type'] !== 'object') {
//        var_dump($object);
//    }
}
die();

$objectStatements = [];
foreach ($methods as $method) {
    $method = (object)($method);

    if (!isset($objectStatements[$method->domain])) {
        $objectStatements[$method->domain] = [];
    }

    $domainsStatements[$method->domain][] = $factory->method($method->name)
        ->makePublic()
        ->setReturnType('Method\\' . ucfirst($method->domain) . '_' . ucfirst($method->name))
        ->addStmt(new Node\Stmt\Return_(
            new Node\Expr\New_(new Node\Name('Method\\' . ucfirst($method->domain) . '_' . ucfirst($method->name)), [
                new Node\Arg( new Node\Expr\PropertyFetch( new Node\Expr\Variable('this'), 'client') ),
                new Node\Arg( new Node\Expr\PropertyFetch( new Node\Expr\Variable('this'), 'defaultQuery') ),
            ])
        ));
}

foreach ($objectStatements as $objectName => $objectStatement) {
    $node = $factory
        ->namespace('Bdb\Addons\VK\Object')
        ->addStmt($factory->class(ucfirst($objectName))
            ->addStmt(new Node\Stmt\Property(
                Node\Stmt\Class_::MODIFIER_PROTECTED, [
                    new Node\Stmt\PropertyProperty('client')
                ]
            ))
            ->addStmt(new Node\Stmt\Property(
                Node\Stmt\Class_::MODIFIER_PROTECTED, [
                    new Node\Stmt\PropertyProperty('defaultQuery')
                ]
            ))
            ->addStmt($factory->method('__construct')
                ->makePublic()
                ->addParam($factory->param('client'))
                ->addParam($factory->param('defaultQuery'))
                ->addStmt(new Node\Expr\Assign(
                    new Node\Expr\PropertyFetch(
                        new Node\Expr\Variable('this'), 'client'
                    ),
                    new Node\Expr\Variable('client')
                ))
                ->addStmt(new Node\Expr\Assign(
                    new Node\Expr\PropertyFetch(
                        new Node\Expr\Variable('this'), 'defaultQuery'
                    ),
                    new Node\Expr\Variable('defaultQuery')
                ))
            )
            ->addStmts($domainStatements)
        )
        ->getNode();

    $code = $prettyPrinter->prettyPrintFile([$node]);
    file_put_contents(sprintf('./src/Addons/VK/Object/%s.php', ucfirst($domainName)), $code);
}
