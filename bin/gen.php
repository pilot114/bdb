<?php

include './vendor/autoload.php';

use PhpParser\BuilderFactory;
use PhpParser\PrettyPrinter;
use PhpParser\Node;

$apiData = file_get_contents('./vendor/vkcom/vk-api-schema/methods.json');
['errors' => $errors, 'methods' => $methods] = json_decode($apiData, true);

foreach ($methods as $i => $method) {
    [$methodDomain, $methodName] = explode('.', $method['name']);
    $methods[$i]['name'] = $methodName;
    $methods[$i]['domain'] = $methodDomain;
}

$factory = new BuilderFactory();

/**
 * ############################### VK\Api #####################################
 */

$methodsStatements = [];
foreach ($methods as $method) {
    $method = (object)($method);

    if (!isset($methodsStatements[$method->domain])) {
        $methodsStatements[$method->domain] = $factory->method($method->domain)
            ->makePublic()
            ->setReturnType('Domain\\' . ucfirst($method->domain))
            ->addStmt(new Node\Stmt\Return_(
                new Node\Expr\New_(new Node\Name('Domain\\' . ucfirst($method->domain)))
            ));
    }
}

$node = $factory->namespace('Bdb\Addons\VK')
    ->addStmt($factory->class('Api')
        ->addStmt(new Node\Stmt\Property(
            Node\Stmt\Class_::MODIFIER_PROTECTED,
            [
                new Node\Stmt\PropertyProperty('authToken')
            ]
        ))
        ->addStmt(new Node\Stmt\ClassConst([
            new Node\Const_('VERSION', new Node\Scalar\DNumber(5.67))
        ]))
        ->addStmt($factory->method('setAuthToken')
            ->makePublic()
            ->addParam(new Node\Param('authToken', null, 'string'))
            ->addStmt(new Node\Expr\Assign(
                new Node\Expr\PropertyFetch(
                    new Node\Expr\Variable('this'), 'authToken'
                ),
                new Node\Expr\Variable('authToken')
        )))
        ->addStmts($methodsStatements)
    )
    ->getNode()
;

$prettyPrinter = new PrettyPrinter\Standard();
$code = $prettyPrinter->prettyPrintFile([$node]);
file_put_contents('./src/Addons/VK/Api.php', $code);

/**
 * ############################### VK\Domain #####################################
 */

$domainsStatements = [];
foreach ($methods as $method) {
    $method = (object)($method);

    if (!isset($domainsStatements[$method->domain])) {
        $domainsStatements[$method->domain] = [];
    }

    $domainsStatements[$method->domain][] = $factory->method($method->name)
        ->makePublic()
        ->setReturnType('Method\\' . ucfirst($method->name))
        ->addStmt(new Node\Stmt\Return_(
            new Node\Expr\New_(new Node\Name('Method\\' . ucfirst($method->name)))
        ));
}

foreach ($domainsStatements as $domainName => $domainStatements) {
    $node = $factory
        ->namespace('Bdb\Addons\VK\Domain')
        ->addStmt($factory->use('Bdb\Addons\VK\Method'))
        ->addStmt($factory->class(ucfirst($domainName))
            ->addStmts($domainStatements)
        )
    ->getNode()
    ;

    $code = $prettyPrinter->prettyPrintFile([$node]);
    file_put_contents(sprintf('./src/Addons/VK/Domain/%s.php', ucfirst($domainName)), $code);
}

/**
 * ############################### VK\Method #####################################
 */

$methodsStatements = [];
foreach ($methods as $method) {
    $method = (object)($method);

    $parameters = [];

    // parameters responses errors - могут отсутствовать
//    var_dump($method);
//    die();

    $class = $factory
        ->class(ucfirst($method->name))
        ->addStmt(new Node\Stmt\Property(
            Node\Stmt\Class_::MODIFIER_PROTECTED,
            [
                new Node\Stmt\PropertyProperty('params', new Node\Expr\Array_([]))
            ]
        ));

    $description = isset($method->description) ? $method->description : 'not description';
    $class->setDocComment(
        sprintf('/**
                  * %s
                  */',
            $description
        )
    );

    $isOpen = isset($method->open) ? 'true' : 'false';
    $class->addStmt($factory->method('isOpen')
        ->makePublic()
        ->setReturnType('boolean')
        ->addStmt(new Node\Stmt\Return_(
            new Node\Expr\ConstFetch(new Node\Name($isOpen))
        ))
    );

    if (isset($method->parameters)) {

        $parameters = [];
        foreach ($method->parameters as $parameter) {
            $parameter = (object)($parameter);

            $name = isset($parameter->required) && $parameter->required ? $parameter->name : '_' . $parameter->name;
            $description = isset($parameter->description) ? $parameter->description : 'not description';

            unset($parameter->required);
            unset($parameter->name);
            unset($parameter->description);

            // build doc-block with metadata
            $docBlock = sprintf(
                '/**
                   * %s
                   *
                   * %s
                   */',
                $description,
                json_encode($parameter)
            );

            $parameters[] = $factory->method($name)
                ->setDocComment($docBlock)
                ->makePublic()
                ->addParam($factory->param($name)->setTypeHint($parameter->type))
                ->setReturnType(ucfirst($method->name))
                ->addStmt(
                    new Node\Expr\Assign(
                        new Node\Expr\ArrayDimFetch(
                            new Node\Expr\PropertyFetch(
                                new Node\Expr\Variable('this'),
                                'params'
                            ),
                            new Node\Scalar\String_($name)
                        ),
                        new Node\Expr\Variable($name)
                    )
                )
                ->addStmt(new Node\Stmt\Return_(
                    new Node\Expr\Variable('this')
                ));
        }
        $class->addStmts($parameters);
    }

    $node = $factory
        ->namespace('Bdb\Addons\VK\Method')
        ->addStmt($class)
        ->getNode()
    ;

    $code = $prettyPrinter->prettyPrintFile([$node]);
    file_put_contents(sprintf('./src/Addons/VK/Method/%s.php', ucfirst($method->name)), $code);
}