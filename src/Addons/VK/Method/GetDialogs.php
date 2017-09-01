<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of the current user's conversations.
 */
class GetDialogs
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Offset needed to return a specific subset of messages.
     *
     * {"type":"integer"}
     */
    public function _offset(integer $_offset) : GetDialogs
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of messages to return.
     *
     * {"type":"integer","minimum":0,"default":20,"maximum":200}
     */
    public function _count(integer $_count) : GetDialogs
    {
        $this->params['_count'] = $_count;
        return $this;
    }
    /**
     * ID of the message from what to return dialogs.
     *
     * {"type":"integer","minimum":0}
     */
    public function _start_message_id(integer $_start_message_id) : GetDialogs
    {
        $this->params['_start_message_id'] = $_start_message_id;
        return $this;
    }
    /**
     * Number of characters after which to truncate a previewed message. To preview the full message, specify '0'.; "NOTE: Messages are not truncated by default. Messages are truncated by words."
     *
     * {"type":"integer","minimum":0}
     */
    public function _preview_length(integer $_preview_length) : GetDialogs
    {
        $this->params['_preview_length'] = $_preview_length;
        return $this;
    }
    /**
     * '1' — return unread messages only.
     *
     * {"type":"boolean"}
     */
    public function _unread(boolean $_unread) : GetDialogs
    {
        $this->params['_unread'] = $_unread;
        return $this;
    }
}