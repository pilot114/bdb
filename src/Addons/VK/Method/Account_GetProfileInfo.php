<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns the current account info.
 */
class Account_GetProfileInfo extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('account.getProfileInfo');
    }
}