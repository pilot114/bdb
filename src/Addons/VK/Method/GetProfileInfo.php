<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns the current account info.
 */
class GetProfileInfo
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
}