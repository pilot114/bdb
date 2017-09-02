<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of the current user's conversations.
 */
class Messages_GetDialogs extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('messages.getDialogs');
    }
    /**
     * Offset needed to return a specific subset of messages.
     *
     * {"type":"int"}
     */
    public function _offset(int $offset) : Messages_GetDialogs
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of messages to return.
     *
     * {"type":"int","minimum":0,"default":20,"maximum":200}
     */
    public function _count(int $count) : Messages_GetDialogs
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * ID of the message from what to return dialogs.
     *
     * {"type":"int","minimum":0}
     */
    public function _start_message_id(int $start_message_id) : Messages_GetDialogs
    {
        $this->params['start_message_id'] = $start_message_id;
        return $this;
    }
    /**
     * Number of characters after which to truncate a previewed message. To preview the full message, specify '0'.; "NOTE: Messages are not truncated by default. Messages are truncated by words."
     *
     * {"type":"int","minimum":0}
     */
    public function _preview_length(int $preview_length) : Messages_GetDialogs
    {
        $this->params['preview_length'] = $preview_length;
        return $this;
    }
    /**
     * '1' — return unread messages only.
     *
     * {"type":"boolean"}
     */
    public function _unread(boolean $unread) : Messages_GetDialogs
    {
        $this->params['unread'] = $unread;
        return $this;
    }
}