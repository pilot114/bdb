<?php

namespace Bdb\Addons\VK\Method;

/**
 * Unsubscribes a device from push notifications.
 */
class Account_UnregisterDevice extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('account.unregisterDevice');
    }
    /**
     * Unique device ID.
     *
     * {"type":"string"}
     */
    public function _device_id(string $device_id) : Account_UnregisterDevice
    {
        $this->params['device_id'] = $device_id;
        return $this;
    }
}