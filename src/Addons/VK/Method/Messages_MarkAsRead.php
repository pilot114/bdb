<?php

namespace Bdb\Addons\VK\Method;

/**
 * Marks messages as read.
 */
class Messages_MarkAsRead extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('messages.markAsRead');
    }
    /**
     * IDs of messages to mark as read.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _message_ids(array $message_ids) : Messages_MarkAsRead
    {
        $this->params['message_ids'] = $message_ids;
        return $this;
    }
    /**
     * Destination ID.; ; "For user:; 'User ID', e.g. '12345'.; ; For chat:; '2000000000' + 'chat_id', e.g. '2000000001'.; ; For community:; '- community ID', e.g. '-12345'.; "
     *
     * {"type":"string"}
     */
    public function _peer_id(string $peer_id) : Messages_MarkAsRead
    {
        $this->params['peer_id'] = $peer_id;
        return $this;
    }
    /**
     * Message ID to start from.
     *
     * {"type":"int","minimum":0}
     */
    public function _start_message_id(int $start_message_id) : Messages_MarkAsRead
    {
        $this->params['start_message_id'] = $start_message_id;
        return $this;
    }
}