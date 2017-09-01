<?php

namespace Bdb\Addons\VK\Method;

/**
 * Deletes a chat's cover picture.
 */
class DeleteChatPhoto
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
    public function chat_id(integer $chat_id) : DeleteChatPhoto
    {
        $this->params['chat_id'] = $chat_id;
        return $this;
    }
}