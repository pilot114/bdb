<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns updates in user's private messages.
 */
class Messages_GetLongPollHistory extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('messages.getLongPollHistory');
    }
    /**
     * Last value of the 'ts' parameter returned from the Long Poll server or by using [vk.com/dev/messages.getLongPollHistory|messages.getLongPollHistory] method.
     *
     * {"type":"integer","minimum":0}
     */
    public function _ts(integer $ts) : Messages_GetLongPollHistory
    {
        $this->params['ts'] = $ts;
        return $this;
    }
    /**
     * Lsat value of 'pts' parameter returned from the Long Poll server or by using [vk.com/dev/messages.getLongPollHistory|messages.getLongPollHistory] method.
     *
     * {"type":"integer","minimum":0}
     */
    public function _pts(integer $pts) : Messages_GetLongPollHistory
    {
        $this->params['pts'] = $pts;
        return $this;
    }
    /**
     * Number of characters after which to truncate a previewed message. To preview the full message, specify '0'.; "NOTE: Messages are not truncated by default. Messages are truncated by words."
     *
     * {"type":"integer","minimum":0}
     */
    public function _preview_length(integer $preview_length) : Messages_GetLongPollHistory
    {
        $this->params['preview_length'] = $preview_length;
        return $this;
    }
    /**
     * '1' — to return history with online users only.
     *
     * {"type":"boolean"}
     */
    public function _onlines(boolean $onlines) : Messages_GetLongPollHistory
    {
        $this->params['onlines'] = $onlines;
        return $this;
    }
    /**
     * Additional profile [vk.com/dev/fields|fields] to return.
     *
     * {"type":"array","items":{"type":"string"},"default":0}
     */
    public function _fields(array $fields) : Messages_GetLongPollHistory
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * Maximum number of events to return.
     *
     * {"type":"integer","minimum":1000,"default":1000}
     */
    public function _events_limit(integer $events_limit) : Messages_GetLongPollHistory
    {
        $this->params['events_limit'] = $events_limit;
        return $this;
    }
    /**
     * Maximum number of messages to return.
     *
     * {"type":"integer","minimum":200,"default":200}
     */
    public function _msgs_limit(integer $msgs_limit) : Messages_GetLongPollHistory
    {
        $this->params['msgs_limit'] = $msgs_limit;
        return $this;
    }
    /**
     * Maximum ID of the message among existing ones in the local copy. Both messages received with API methods (for example, , ), and data received from a Long Poll server (events with code 4) are taken into account.
     *
     * {"type":"integer","minimum":0}
     */
    public function _max_msg_id(integer $max_msg_id) : Messages_GetLongPollHistory
    {
        $this->params['max_msg_id'] = $max_msg_id;
        return $this;
    }
}