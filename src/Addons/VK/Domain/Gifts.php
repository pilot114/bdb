<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Gifts
{
    public function get() : Method\Get
    {
        return new Method\Get();
    }
}