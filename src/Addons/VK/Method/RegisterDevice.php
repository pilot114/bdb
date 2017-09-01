<?php

namespace Bdb\Addons\VK\Method;

/**
 * Subscribes an iOS/Android/Windows Phone-based device to receive push notifications
 */
class RegisterDevice
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Device token used to send notifications. (for mpns, the token shall be URL for sending of notifications)
     *
     * {"type":"string"}
     */
    public function token(string $token) : RegisterDevice
    {
        $this->params['token'] = $token;
        return $this;
    }
    /**
     * String name of device model.
     *
     * {"type":"string"}
     */
    public function _device_model(string $_device_model) : RegisterDevice
    {
        $this->params['_device_model'] = $_device_model;
        return $this;
    }
    /**
     * Device year.
     *
     * {"type":"integer"}
     */
    public function _device_year(integer $_device_year) : RegisterDevice
    {
        $this->params['_device_year'] = $_device_year;
        return $this;
    }
    /**
     * Unique device ID.
     *
     * {"type":"string"}
     */
    public function device_id(string $device_id) : RegisterDevice
    {
        $this->params['device_id'] = $device_id;
        return $this;
    }
    /**
     * String version of device operating system.
     *
     * {"type":"string"}
     */
    public function _system_version(string $_system_version) : RegisterDevice
    {
        $this->params['_system_version'] = $_system_version;
        return $this;
    }
    /**
     * Push settings in a [vk.com/dev/push_settings|special format].
     *
     * {"type":"string"}
     */
    public function _settings(string $_settings) : RegisterDevice
    {
        $this->params['_settings'] = $_settings;
        return $this;
    }
}