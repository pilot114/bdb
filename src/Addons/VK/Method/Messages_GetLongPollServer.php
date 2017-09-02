<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns data required for connection to a Long Poll server.
 */
class Messages_GetLongPollServer extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('messages.getLongPollServer');
    }
    /**
     * '1' — to use SSL.
     *
     * {"type":"boolean"}
     */
    public function _use_ssl(boolean $use_ssl) : Messages_GetLongPollServer
    {
        $this->params['use_ssl'] = $use_ssl;
        return $this;
    }
    /**
     * '1' — to return the 'pts' field, needed for the [vk.com/dev/messages.getLongPollHistory|messages.getLongPollHistory] method.
     *
     * {"type":"boolean"}
     */
    public function _need_pts(boolean $need_pts) : Messages_GetLongPollServer
    {
        $this->params['need_pts'] = $need_pts;
        return $this;
    }
}