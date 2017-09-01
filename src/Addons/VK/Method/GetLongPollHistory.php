<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns updates in user's private messages.
 */
class GetLongPollHistory
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Last value of the 'ts' parameter returned from the Long Poll server or by using [vk.com/dev/messages.getLongPollHistory|messages.getLongPollHistory] method.
     *
     * {"type":"integer","minimum":0}
     */
    public function _ts(integer $_ts) : GetLongPollHistory
    {
        $this->params['_ts'] = $_ts;
        return $this;
    }
    /**
     * Lsat value of 'pts' parameter returned from the Long Poll server or by using [vk.com/dev/messages.getLongPollHistory|messages.getLongPollHistory] method.
     *
     * {"type":"integer","minimum":0}
     */
    public function _pts(integer $_pts) : GetLongPollHistory
    {
        $this->params['_pts'] = $_pts;
        return $this;
    }
    /**
     * Number of characters after which to truncate a previewed message. To preview the full message, specify '0'.; "NOTE: Messages are not truncated by default. Messages are truncated by words."
     *
     * {"type":"integer","minimum":0}
     */
    public function _preview_length(integer $_preview_length) : GetLongPollHistory
    {
        $this->params['_preview_length'] = $_preview_length;
        return $this;
    }
    /**
     * '1' — to return history with online users only.
     *
     * {"type":"boolean"}
     */
    public function _onlines(boolean $_onlines) : GetLongPollHistory
    {
        $this->params['_onlines'] = $_onlines;
        return $this;
    }
    /**
     * Additional profile [vk.com/dev/fields|fields] to return.
     *
     * {"type":"array","items":{"type":"string"},"default":0}
     */
    public function _fields(array $_fields) : GetLongPollHistory
    {
        $this->params['_fields'] = $_fields;
        return $this;
    }
    /**
     * Maximum number of events to return.
     *
     * {"type":"integer","minimum":1000,"default":1000}
     */
    public function _events_limit(integer $_events_limit) : GetLongPollHistory
    {
        $this->params['_events_limit'] = $_events_limit;
        return $this;
    }
    /**
     * Maximum number of messages to return.
     *
     * {"type":"integer","minimum":200,"default":200}
     */
    public function _msgs_limit(integer $_msgs_limit) : GetLongPollHistory
    {
        $this->params['_msgs_limit'] = $_msgs_limit;
        return $this;
    }
    /**
     * Maximum ID of the message among existing ones in the local copy. Both messages received with API methods (for example, , ), and data received from a Long Poll server (events with code 4) are taken into account.
     *
     * {"type":"integer","minimum":0}
     */
    public function _max_msg_id(integer $_max_msg_id) : GetLongPollHistory
    {
        $this->params['_max_msg_id'] = $_max_msg_id;
        return $this;
    }
}