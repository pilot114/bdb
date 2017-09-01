<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of advertising accounts.
 */
class GetAccounts
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
}