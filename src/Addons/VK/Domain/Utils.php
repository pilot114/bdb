<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Utils
{
    public function checkLink() : Method\CheckLink
    {
        return new Method\CheckLink();
    }
    public function resolveScreenName() : Method\ResolveScreenName
    {
        return new Method\ResolveScreenName();
    }
    public function getServerTime() : Method\GetServerTime
    {
        return new Method\GetServerTime();
    }
}