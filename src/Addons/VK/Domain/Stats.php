<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Stats
{
    public function get() : Method\Get
    {
        return new Method\Get();
    }
    public function trackVisitor() : Method\TrackVisitor
    {
        return new Method\TrackVisitor();
    }
    public function getPostReach() : Method\GetPostReach
    {
        return new Method\GetPostReach();
    }
}