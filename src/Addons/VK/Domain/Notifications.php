<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Notifications
{
    public function get() : Method\Get
    {
        return new Method\Get();
    }
    public function markAsViewed() : Method\MarkAsViewed
    {
        return new Method\MarkAsViewed();
    }
}