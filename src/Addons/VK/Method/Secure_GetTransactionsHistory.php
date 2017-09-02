<?php

namespace Bdb\Addons\VK\Method;

/**
 * Shows history of votes transaction between users and the application.
 */
class Secure_GetTransactionsHistory extends \Bdb\Addons\VK\BaseMethod
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    public function __construct($client, $defaultQuery)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('secure.getTransactionsHistory');
    }
}