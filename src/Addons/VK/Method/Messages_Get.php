<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of the current user's incoming or outgoing private messages.
 */
class Messages_Get extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('messages.get');
    }
    /**
     * '1' — to return outgoing messages; '0' — to return incoming messages (default)
     *
     * {"type":"boolean"}
     */
    public function _out(boolean $out) : Messages_Get
    {
        $this->params['out'] = $out;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of messages.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Messages_Get
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of messages to return.
     *
     * {"type":"int","minimum":0,"default":20,"maximum":200}
     */
    public function _count(int $count) : Messages_Get
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Maximum time since a message was sent, in seconds. To return messages without a time limitation, set as '0'.
     *
     * {"type":"int","minimum":0}
     */
    public function _time_offset(int $time_offset) : Messages_Get
    {
        $this->params['time_offset'] = $time_offset;
        return $this;
    }
    /**
     * Number of characters after which to truncate a previewed message. To preview the full message, specify '0'.; "NOTE: Messages are not truncated by default. Messages are truncated by words."
     *
     * {"type":"int","minimum":0}
     */
    public function _preview_length(int $preview_length) : Messages_Get
    {
        $this->params['preview_length'] = $preview_length;
        return $this;
    }
    /**
     * ID of the message received before the message that will be returned last (provided that no more than 'count' messages were received before it; otherwise 'offset' parameter shall be used).
     *
     * {"type":"int","minimum":0}
     */
    public function _last_message_id(int $last_message_id) : Messages_Get
    {
        $this->params['last_message_id'] = $last_message_id;
        return $this;
    }
}