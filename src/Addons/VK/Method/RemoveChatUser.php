<?php

namespace Bdb\Addons\VK\Method;

/**
 * Allows the current user to leave a chat or, if the current user started the chat, allows the user to remove another user from the chat.
 */
class RemoveChatUser
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Chat ID.
     *
     * {"type":"integer"}
     */
    public function chat_id(integer $chat_id) : RemoveChatUser
    {
        $this->params['chat_id'] = $chat_id;
        return $this;
    }
    /**
     * ID of the user to be removed from the chat.
     *
     * {"type":"string"}
     */
    public function user_id(string $user_id) : RemoveChatUser
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}