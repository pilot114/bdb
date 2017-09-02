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
                new Node\Expr\New_(new Node\Name('Domain\\' . ucfirst($method->domain)), [
                    new Node\Arg( new Node\Expr\PropertyFetch( new Node\Expr\Variable('this'), 'client') ),
                    new Node\Arg( new Node\Expr\PropertyFetch( new Node\Expr\Variable('this'), 'defaultQuery') ),
                ])
            ));
    }
}

$node = $factory->namespace('Bdb\Addons\VK')
    ->addStmt($factory->use('GuzzleHttp\Client'))
    ->addStmt($factory->class('Api')
        ->addStmt(new Node\Stmt\ClassConst([
            new Node\Const_('VERSION', new Node\Scalar\DNumber(5.67))
        ]))
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
            ->addParam($factory->param('accessToken')->setTypeHint('string'))
            ->addStmt(new Node\Expr\Assign(
                    new Node\Expr\PropertyFetch(
                        new Node\Expr\Variable('this'), 'defaultQuery'
                    ),
                    new Node\Expr\Array_([
                        new PhpParser\Node\Expr\ArrayItem(
                            new Node\Expr\ClassConstFetch(
                                new Node\Name('self'),
                                'VERSION'
                            ),
                            new Node\Scalar\String_('v')
                        ),
                        new PhpParser\Node\Expr\ArrayItem(
                            new Node\Expr\Variable('accessToken'),
                            new Node\Scalar\String_('access_token')
                        ),
                    ])
            ))
            ->addStmt(new Node\Expr\Assign(
                new Node\Expr\PropertyFetch(
                    new Node\Expr\Variable('this'), 'client'
                ),
                new Node\Expr\New_(new Node\Name('Client'), [
                    new PhpParser\Node\Arg(
                        new Node\Expr\Array_([
                            new Node\Expr\ArrayItem(
                                new Node\Scalar\String_('https://api.vk.com/method/'),
                                new Node\Scalar\String_('base_uri')
                            )
                        ])
                    )
                ])
            ))
        )
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
        ->setReturnType('Method\\' . ucfirst($method->domain) . '_' . ucfirst($method->name))
        ->addStmt(new Node\Stmt\Return_(
            new Node\Expr\New_(new Node\Name('Method\\' . ucfirst($method->domain) . '_' . ucfirst($method->name)), [
                new Node\Arg( new Node\Expr\PropertyFetch( new Node\Expr\Variable('this'), 'client') ),
                new Node\Arg( new Node\Expr\PropertyFetch( new Node\Expr\Variable('this'), 'defaultQuery') ),
            ])
        ));
}

foreach ($domainsStatements as $domainName => $domainStatements) {
    $node = $factory
        ->namespace('Bdb\Addons\VK\Domain')
        ->addStmt($factory->use('Bdb\Addons\VK\Method'))
        ->addStmt($factory->class(ucfirst($domainName))
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

    $class = $factory->class(ucfirst($method->domain) . '_' . ucfirst($method->name))
        ->extend('\Bdb\Addons\VK\BaseMethod')
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

    $class->addStmt($factory->method('__construct')
        ->makePublic()
        ->addParam($factory->param('client'))
        ->addParam($factory->param('defaultQuery'))
        ->addStmt(new Node\Expr\StaticCall(
            new Node\Name('parent'),
            '__construct',
            [
                new Node\Arg(new Node\Expr\Variable('client')),
                new Node\Arg(new Node\Expr\Variable('defaultQuery')),
            ]
        ))
    );

    $class->addStmt($factory->method('call')
        ->makePublic()
        ->addStmt(new Node\Stmt\Return_(new Node\Expr\MethodCall(
            new Node\Expr\Variable('this'),
            'onCall',
            [
                new Node\Arg( new Node\Scalar\String_($method->domain . '.' . $method->name)),
            ]
        )))
    );

    // TODO: add optional responses&errors in method object
    // TODO: add POST support for tipical upload flow

    if (isset($method->parameters)) {

        $parameters = [];
        foreach ($method->parameters as $parameter) {
            $parameter = (object)($parameter);

            $name = $parameter->name;
            $nameUnderscore = isset($parameter->required) && $parameter->required ? $parameter->name : '_' . $parameter->name;
            $description = isset($parameter->description) ? $parameter->description : 'not description';

            // fix typing for php
            if ($parameter->type === 'number') {
                $parameter->type = 'float';
            }

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

            $parameters[] = $factory->method($nameUnderscore)
                ->setDocComment($docBlock)
                ->makePublic()
                ->addParam($factory->param($name)->setTypeHint($parameter->type))
                ->setReturnType(ucfirst($method->domain) . '_' . ucfirst($method->name))
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
    file_put_contents(sprintf('./src/Addons/VK/Method/%s.php', ucfirst($method->domain) . '_' . ucfirst($method->name)), $code);
}
