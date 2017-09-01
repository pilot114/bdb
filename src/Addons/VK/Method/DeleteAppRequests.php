<?php

namespace Bdb\Addons\VK\Method;

/**
 * Deletes all request notifications from the current app.
 */
class DeleteAppRequests
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
}