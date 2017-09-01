<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns the current time of the VK server.
 */
class GetServerTime
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
}