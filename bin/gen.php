<?php

include './vendor/autoload.php';

use PhpParser\BuilderFactory;
use PhpParser\PrettyPrinter;
use PhpParser\Node;

$schema = json_decode(file_get_contents('./vendor/vkcom/vk-api-schema/schema.json'), true);
var_dump(array_keys($schema['definitions']));
var_dump(array_keys($schema['properties']));
var_dump($schema['additionalProperties']);
die();

$factory = new BuilderFactory;
$node = $factory->namespace('Name\Space')
    ->addStmt($factory->use('Some\Other\Thingy')->as('SomeOtherClass'))
    ->addStmt($factory->class('SomeClass')
        ->extend('SomeOtherClass')
        ->implement('A\Few', '\Interfaces')
        ->makeAbstract() // ->makeFinal()

        ->addStmt($factory->method('someMethod')
            ->makePublic()
            ->makeAbstract() // ->makeFinal()
            ->setReturnType('bool')
            ->addParam($factory->param('someParam')->setTypeHint('SomeClass'))
            ->setDocComment('/**
                              * This method does something.
                              *
                              * @param SomeClass And takes a parameter
                              */')
        )

        ->addStmt($factory->method('anotherMethod')
            ->makeProtected() // ->makePublic() [default], ->makePrivate()
            ->addParam($factory->param('someParam')->setDefault('test'))
            // it is possible to add manually created nodes
            ->addStmt(new Node\Expr\Print_(new Node\Expr\Variable('someParam')))
        )

        // properties will be correctly reordered above the methods
        ->addStmt($factory->property('someProperty')->makeProtected())
        ->addStmt($factory->property('anotherProperty')->makePrivate()->setDefault(array(1, 2, 3)))
    )

    ->getNode()
;

$stmts = array($node);
$prettyPrinter = new PrettyPrinter\Standard();
echo $prettyPrinter->prettyPrintFile($stmts);