<?php

namespace Bdb\Addons\VK\Method;

/**
 * Edits the title of a chat.
 */
class EditChat
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
    public function chat_id(integer $chat_id) : EditChat
    {
        $this->params['chat_id'] = $chat_id;
        return $this;
    }
    /**
     * New title of the chat.
     *
     * {"type":"string"}
     */
    public function title(string $title) : EditChat
    {
        $this->params['title'] = $title;
        return $this;
    }
}