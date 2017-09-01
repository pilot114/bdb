<?php

namespace Bdb\Addons\VK\Method;

/**
 * Resets the counter of new notifications about other users' feedback to the current user's wall posts.
 */
class MarkAsViewed
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
}