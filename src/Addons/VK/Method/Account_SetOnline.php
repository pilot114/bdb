<?php

namespace Bdb\Addons\VK\Method;

/**
 * Marks the current user as online for 15 minutes.
 */
class Account_SetOnline extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('account.setOnline');
    }
    /**
     * '1' if videocalls are available for current device.
     *
     * {"type":"boolean"}
     */
    public function _voip(boolean $voip) : Account_SetOnline
    {
        $this->params['voip'] = $voip;
        return $this;
    }
}