<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns the current time of the VK server.
 */
class Utils_GetServerTime extends \Bdb\Addons\VK\BaseMethod
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    public function __construct($client, $defaultQuery)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('utils.getServerTime');
    }
}