<?php

namespace Bdb\Addons\VK\Method;

/**
 * Gets settings of push notifications.
 */
class Account_GetPushSettings extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('account.getPushSettings');
    }
    /**
     * Unique device ID.
     *
     * {"type":"string"}
     */
    public function _device_id(string $device_id) : Account_GetPushSettings
    {
        $this->params['device_id'] = $device_id;
        return $this;
    }
}