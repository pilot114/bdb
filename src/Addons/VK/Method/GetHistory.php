<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns message history for the specified user or group chat.
 */
class GetHistory
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Offset needed to return a specific subset of messages.
     *
     * {"type":"integer"}
     */
    public function _offset(integer $_offset) : GetHistory
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of messages to return.
     *
     * {"type":"integer","minimum":0,"default":20,"maximum":200}
     */
    public function _count(integer $_count) : GetHistory
    {
        $this->params['_count'] = $_count;
        return $this;
    }
    /**
     * ID of the user whose message history you want to return.
     *
     * {"type":"string"}
     */
    public function _user_id(string $_user_id) : GetHistory
    {
        $this->params['_user_id'] = $_user_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"integer"}
     */
    public function _peer_id(integer $_peer_id) : GetHistory
    {
        $this->params['_peer_id'] = $_peer_id;
        return $this;
    }
    /**
     * Starting message ID from which to return history.
     *
     * {"type":"integer"}
     */
    public function _start_message_id(integer $_start_message_id) : GetHistory
    {
        $this->params['_start_message_id'] = $_start_message_id;
        return $this;
    }
    /**
     * Sort order:; '1' — return messages in chronological order.; '0' — return messages in reverse chronological order.
     *
     * {"type":"integer","enum":[1,0],"enumNames":["chronological","reverse chronological"]}
     */
    public function _rev(integer $_rev) : GetHistory
    {
        $this->params['_rev'] = $_rev;
        return $this;
    }
}