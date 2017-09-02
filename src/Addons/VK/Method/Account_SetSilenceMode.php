<?php

namespace Bdb\Addons\VK\Method;

/**
 * Mutes push notifications for the set period of time.
 */
class Account_SetSilenceMode extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('account.setSilenceMode');
    }
    /**
     * Unique device ID.
     *
     * {"type":"string"}
     */
    public function _device_id(string $device_id) : Account_SetSilenceMode
    {
        $this->params['device_id'] = $device_id;
        return $this;
    }
    /**
     * Time in seconds for what notifications should be disabled. '-1' to disable forever.
     *
     * {"type":"integer"}
     */
    public function _time(integer $time) : Account_SetSilenceMode
    {
        $this->params['time'] = $time;
        return $this;
    }
    /**
     * Destination ID.; "For user:; 'User ID', e.g. '12345'.; ; For chat:; '2000000000' + 'Chat ID', e.g. '2000000001'.; ; For community:; '- Community ID', e.g. '-12345'.; "
     *
     * {"type":"integer"}
     */
    public function _peer_id(integer $peer_id) : Account_SetSilenceMode
    {
        $this->params['peer_id'] = $peer_id;
        return $this;
    }
    /**
     * '1' — to enable sound in this dialog, '0' — to disable sound. Only if 'peer_id' contains user or community ID.
     *
     * {"type":"integer"}
     */
    public function _sound(integer $sound) : Account_SetSilenceMode
    {
        $this->params['sound'] = $sound;
        return $this;
    }
}