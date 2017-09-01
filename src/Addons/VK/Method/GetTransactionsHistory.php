<?php

namespace Bdb\Addons\VK\Method;

/**
 * Shows history of votes transaction between users and the application.
 */
class GetTransactionsHistory
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
}