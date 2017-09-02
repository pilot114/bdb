<?php

namespace Bdb\Addons\VK\Method;

/**
 * Deletes a chat's cover picture.
 */
class Messages_DeleteChatPhoto extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('messages.deleteChatPhoto');
    }
    /**
     * Chat ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function chat_id(integer $chat_id) : Messages_DeleteChatPhoto
    {
        $this->params['chat_id'] = $chat_id;
        return $this;
    }
}