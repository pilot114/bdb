<?php

namespace Bdb\Addons\VK\Method;

/**
 * Deletes all private messages in a conversation.
 */
class DeleteDialog
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * User ID. To clear a chat history use 'chat_id'
     *
     * {"type":"string"}
     */
    public function _user_id(string $_user_id) : DeleteDialog
    {
        $this->params['_user_id'] = $_user_id;
        return $this;
    }
    /**
     * Destination ID.; ; "For user:; 'User ID', e.g. '12345'.; ; For chat:; '2000000000' + 'chat_id', e.g. '2000000001'.; ; For community:; '- community ID', e.g. '-12345'.; "
     *
     * {"type":"integer"}
     */
    public function _peer_id(integer $_peer_id) : DeleteDialog
    {
        $this->params['_peer_id'] = $_peer_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of messages.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : DeleteDialog
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of messages to delete.; "NOTE: If the number of messages exceeds the maximum, the method shall be called several times."
     *
     * {"type":"integer","minimum":0,"maximum":10000}
     */
    public function _count(integer $_count) : DeleteDialog
    {
        $this->params['_count'] = $_count;
        return $this;
    }
}