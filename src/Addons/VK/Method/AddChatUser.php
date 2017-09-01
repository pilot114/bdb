<?php

namespace Bdb\Addons\VK\Method;

/**
 * Adds a new user to a chat.
 */
class AddChatUser
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Chat ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function chat_id(integer $chat_id) : AddChatUser
    {
        $this->params['chat_id'] = $chat_id;
        return $this;
    }
    /**
     * ID of the user to be added to the chat.
     *
     * {"type":"integer","minimum":0}
     */
    public function user_id(integer $user_id) : AddChatUser
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}