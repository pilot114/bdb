<?php

namespace Bdb\Addons\VK\Method;

/**
 * Marks the current user as online for 15 minutes.
 */
class SetOnline
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * '1' if videocalls are available for current device.
     *
     * {"type":"boolean"}
     */
    public function _voip(boolean $_voip) : SetOnline
    {
        $this->params['_voip'] = $_voip;
        return $this;
    }
}