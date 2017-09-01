<?php

namespace Bdb\Addons\VK\Method;

/**
 * Gets settings of push notifications.
 */
class GetPushSettings
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
    public function _device_id(string $_device_id) : GetPushSettings
    {
        $this->params['_device_id'] = $_device_id;
        return $this;
    }
}