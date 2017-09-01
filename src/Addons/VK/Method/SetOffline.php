<?php

namespace Bdb\Addons\VK\Method;

/**
 * Marks a current user as offline.
 */
class SetOffline
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
}