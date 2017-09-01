<?php

namespace Bdb\Addons\VK\Method;

/**
 * Creates a chat with several participants.
 */
class CreateChat
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * IDs of the users to be added to the chat.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function user_ids(array $user_ids) : CreateChat
    {
        $this->params['user_ids'] = $user_ids;
        return $this;
    }
    /**
     * Chat title.
     *
     * {"type":"string"}
     */
    public function _title(string $_title) : CreateChat
    {
        $this->params['_title'] = $_title;
        return $this;
    }
}