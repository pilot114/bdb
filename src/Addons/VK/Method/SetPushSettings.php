<?php

namespace Bdb\Addons\VK\Method;

/**
 * Change push settings.
 */
class SetPushSettings
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
    public function device_id(string $device_id) : SetPushSettings
    {
        $this->params['device_id'] = $device_id;
        return $this;
    }
    /**
     * Push settings in a [vk.com/dev/push_settings|special format].
     *
     * {"type":"string"}
     */
    public function _settings(string $_settings) : SetPushSettings
    {
        $this->params['_settings'] = $_settings;
        return $this;
    }
    /**
     * Notification key.
     *
     * {"type":"string"}
     */
    public function _key(string $_key) : SetPushSettings
    {
        $this->params['_key'] = $_key;
        return $this;
    }
    /**
     * New value for the key in a [vk.com/dev/push_settings|special format].
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _value(array $_value) : SetPushSettings
    {
        $this->params['_value'] = $_value;
        return $this;
    }
}