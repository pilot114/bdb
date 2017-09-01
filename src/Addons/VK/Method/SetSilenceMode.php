<?php

namespace Bdb\Addons\VK\Method;

/**
 * Mutes push notifications for the set period of time.
 */
class SetSilenceMode
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
    public function _device_id(string $_device_id) : SetSilenceMode
    {
        $this->params['_device_id'] = $_device_id;
        return $this;
    }
    /**
     * Time in seconds for what notifications should be disabled. '-1' to disable forever.
     *
     * {"type":"integer"}
     */
    public function _time(integer $_time) : SetSilenceMode
    {
        $this->params['_time'] = $_time;
        return $this;
    }
    /**
     * Destination ID.; "For user:; 'User ID', e.g. '12345'.; ; For chat:; '2000000000' + 'Chat ID', e.g. '2000000001'.; ; For community:; '- Community ID', e.g. '-12345'.; "
     *
     * {"type":"integer"}
     */
    public function _peer_id(integer $_peer_id) : SetSilenceMode
    {
        $this->params['_peer_id'] = $_peer_id;
        return $this;
    }
    /**
     * '1' — to enable sound in this dialog, '0' — to disable sound. Only if 'peer_id' contains user or community ID.
     *
     * {"type":"integer"}
     */
    public function _sound(integer $_sound) : SetSilenceMode
    {
        $this->params['_sound'] = $_sound;
        return $this;
    }
}