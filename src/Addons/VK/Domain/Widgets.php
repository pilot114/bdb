<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Widgets
{
    public function getComments() : Method\GetComments
    {
        return new Method\GetComments();
    }
    public function getPages() : Method\GetPages
    {
        return new Method\GetPages();
    }
}