<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of IDs of the current user's friends who installed the application.
 */
class GetAppUsers
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
}