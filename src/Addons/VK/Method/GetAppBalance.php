<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns payment balance of the application in hundredth of a vote.
 */
class GetAppBalance
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
}