<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns payment balance of the application in hundredth of a vote.
 */
class Secure_GetAppBalance extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('secure.getAppBalance');
    }
}