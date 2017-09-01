<?php

namespace Bdb\Addons\VK\Method;

/**
 * Marks all incoming friend requests as viewed.
 */
class DeleteAllRequests
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
}