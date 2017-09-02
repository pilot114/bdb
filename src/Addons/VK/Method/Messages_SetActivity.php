<?php

namespace Bdb\Addons\VK\Method;

/**
 * Changes the status of a user as typing in a conversation.
 */
class Messages_SetActivity extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('messages.setActivity');
    }
    /**
     * User ID.
     *
     * {"type":"string"}
     */
    public function _user_id(string $user_id) : Messages_SetActivity
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * 'typing' — user has started to type.
     *
     * {"type":"string"}
     */
    public function _type(string $type) : Messages_SetActivity
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * Destination ID.; ; "For user:; 'User ID', e.g. '12345'.; ; For chat:; '2000000000' + 'chat_id', e.g. '2000000001'.; ; For community:; '- community ID', e.g. '-12345'.; "
     *
     * {"type":"integer"}
     */
    public function _peer_id(integer $peer_id) : Messages_SetActivity
    {
        $this->params['peer_id'] = $peer_id;
        return $this;
    }
}