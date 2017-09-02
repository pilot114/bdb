<?php

namespace Bdb\Addons\VK\Method;

/**
 * Marks a current user as offline.
 */
class Account_SetOffline extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('account.setOffline');
    }
}