<?php

namespace Bdb\Addons\VK\Method;

/**
 * Marks messages as read.
 */
class MarkAsRead
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * IDs of messages to mark as read.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _message_ids(array $_message_ids) : MarkAsRead
    {
        $this->params['_message_ids'] = $_message_ids;
        return $this;
    }
    /**
     * Destination ID.; ; "For user:; 'User ID', e.g. '12345'.; ; For chat:; '2000000000' + 'chat_id', e.g. '2000000001'.; ; For community:; '- community ID', e.g. '-12345'.; "
     *
     * {"type":"string"}
     */
    public function _peer_id(string $_peer_id) : MarkAsRead
    {
        $this->params['_peer_id'] = $_peer_id;
        return $this;
    }
    /**
     * Message ID to start from.
     *
     * {"type":"integer","minimum":0}
     */
    public function _start_message_id(integer $_start_message_id) : MarkAsRead
    {
        $this->params['_start_message_id'] = $_start_message_id;
        return $this;
    }
}