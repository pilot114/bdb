<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Storage
{
    public function get() : Method\Get
    {
        return new Method\Get();
    }
    public function set() : Method\Set
    {
        return new Method\Set();
    }
    public function getKeys() : Method\GetKeys
    {
        return new Method\GetKeys();
    }
}