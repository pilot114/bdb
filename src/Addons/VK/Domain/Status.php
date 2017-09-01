<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Status
{
    public function get() : Method\Get
    {
        return new Method\Get();
    }
    public function set() : Method\Set
    {
        return new Method\Set();
    }
}