<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns data required for connection to a Long Poll server.
 */
class GetLongPollServer
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * '1' — to use SSL.
     *
     * {"type":"boolean"}
     */
    public function _use_ssl(boolean $_use_ssl) : GetLongPollServer
    {
        $this->params['_use_ssl'] = $_use_ssl;
        return $this;
    }
    /**
     * '1' — to return the 'pts' field, needed for the [vk.com/dev/messages.getLongPollHistory|messages.getLongPollHistory] method.
     *
     * {"type":"boolean"}
     */
    public function _need_pts(boolean $_need_pts) : GetLongPollServer
    {
        $this->params['_need_pts'] = $_need_pts;
        return $this;
    }
}