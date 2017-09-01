<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Search
{
    public function getHints() : Method\GetHints
    {
        return new Method\GetHints();
    }
}