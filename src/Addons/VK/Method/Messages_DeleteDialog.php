<?php

namespace Bdb\Addons\VK\Method;

/**
 * Deletes all private messages in a conversation.
 */
class Messages_DeleteDialog extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('messages.deleteDialog');
    }
    /**
     * User ID. To clear a chat history use 'chat_id'
     *
     * {"type":"string"}
     */
    public function _user_id(string $user_id) : Messages_DeleteDialog
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Destination ID.; ; "For user:; 'User ID', e.g. '12345'.; ; For chat:; '2000000000' + 'chat_id', e.g. '2000000001'.; ; For community:; '- community ID', e.g. '-12345'.; "
     *
     * {"type":"int"}
     */
    public function _peer_id(int $peer_id) : Messages_DeleteDialog
    {
        $this->params['peer_id'] = $peer_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of messages.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Messages_DeleteDialog
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of messages to delete.; "NOTE: If the number of messages exceeds the maximum, the method shall be called several times."
     *
     * {"type":"int","minimum":0,"maximum":10000}
     */
    public function _count(int $count) : Messages_DeleteDialog
    {
        $this->params['count'] = $count;
        return $this;
    }
}