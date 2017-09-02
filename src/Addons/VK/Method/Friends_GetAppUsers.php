<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of IDs of the current user's friends who installed the application.
 */
class Friends_GetAppUsers extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('friends.getAppUsers');
    }
}