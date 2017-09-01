<?php

namespace Bdb\Addons\VK\Method;

/**
 * Unsubscribes a device from push notifications.
 */
class UnregisterDevice
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Unique device ID.
     *
     * {"type":"string"}
     */
    public function _device_id(string $_device_id) : UnregisterDevice
    {
        $this->params['_device_id'] = $_device_id;
        return $this;
    }
}