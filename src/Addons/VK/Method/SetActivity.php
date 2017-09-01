<?php

namespace Bdb\Addons\VK\Method;

/**
 * Changes the status of a user as typing in a conversation.
 */
class SetActivity
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * User ID.
     *
     * {"type":"string"}
     */
    public function _user_id(string $_user_id) : SetActivity
    {
        $this->params['_user_id'] = $_user_id;
        return $this;
    }
    /**
     * 'typing' — user has started to type.
     *
     * {"type":"string"}
     */
    public function _type(string $_type) : SetActivity
    {
        $this->params['_type'] = $_type;
        return $this;
    }
    /**
     * Destination ID.; ; "For user:; 'User ID', e.g. '12345'.; ; For chat:; '2000000000' + 'chat_id', e.g. '2000000001'.; ; For community:; '- community ID', e.g. '-12345'.; "
     *
     * {"type":"integer"}
     */
    public function _peer_id(integer $_peer_id) : SetActivity
    {
        $this->params['_peer_id'] = $_peer_id;
        return $this;
    }
}