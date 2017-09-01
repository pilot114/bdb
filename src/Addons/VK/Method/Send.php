<?php

namespace Bdb\Addons\VK\Method;

/**
 * Sends a message.
 */
class Send
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * User ID (by default — current user).
     *
     * {"type":"integer"}
     */
    public function _user_id(integer $_user_id) : Send
    {
        $this->params['_user_id'] = $_user_id;
        return $this;
    }
    /**
     * Unique identifier to avoid resending the message.
     *
     * {"type":"integer"}
     */
    public function _random_id(integer $_random_id) : Send
    {
        $this->params['_random_id'] = $_random_id;
        return $this;
    }
    /**
     * Destination ID.; ; "For user:; 'User ID', e.g. '12345'.; ; For chat:; '2000000000' + 'chat_id', e.g. '2000000001'.; ; For community:; '- community ID', e.g. '-12345'.; "
     *
     * {"type":"integer"}
     */
    public function _peer_id(integer $_peer_id) : Send
    {
        $this->params['_peer_id'] = $_peer_id;
        return $this;
    }
    /**
     * User's short address (for example, 'illarionov').
     *
     * {"type":"string"}
     */
    public function _domain(string $_domain) : Send
    {
        $this->params['_domain'] = $_domain;
        return $this;
    }
    /**
     * ID of conversation the message will relate to.
     *
     * {"type":"integer","minimum":0}
     */
    public function _chat_id(integer $_chat_id) : Send
    {
        $this->params['_chat_id'] = $_chat_id;
        return $this;
    }
    /**
     * IDs of message recipients (if new conversation shall be started).
     *
     * {"type":"array","items":{"type":"integer"}}
     */
    public function _user_ids(array $_user_ids) : Send
    {
        $this->params['_user_ids'] = $_user_ids;
        return $this;
    }
    /**
     * (Required if 'attachments' is not set.) Text of the message.
     *
     * {"type":"string"}
     */
    public function _message(string $_message) : Send
    {
        $this->params['_message'] = $_message;
        return $this;
    }
    /**
     * Geographical latitude of a check-in, in degrees (from -90 to 90).
     *
     * {"type":"number","minimum":-90,"maximum":90}
     */
    public function _lat(number $_lat) : Send
    {
        $this->params['_lat'] = $_lat;
        return $this;
    }
    /**
     * Geographical longitude of a check-in, in degrees (from -180 to 180).
     *
     * {"type":"number","minimum":-180,"maximum":180}
     */
    public function _long(number $_long) : Send
    {
        $this->params['_long'] = $_long;
        return $this;
    }
    /**
     * (Required if 'message' is not set.) List of objects attached to the message, separated by commas, in the following format:; "<owner_id>_<media_id>"; '' — Type of media attachment:; 'photo' — photo; 'video' — video; 'audio' — audio; 'doc' — document; 'wall' — wall post; '<owner_id>' — ID of the media attachment owner.; '<media_id>' — media attachment ID.; ; Example:; "photo100172_166443618"
     *
     * {"type":"string"}
     */
    public function _attachment(string $_attachment) : Send
    {
        $this->params['_attachment'] = $_attachment;
        return $this;
    }
    /**
     * ID of forwarded messages, separated with a comma. Listed messages of the sender will be shown in the message body at the recipient's.; ; Example:; "123,431,544"
     *
     * {"type":"string"}
     */
    public function _forward_messages(string $_forward_messages) : Send
    {
        $this->params['_forward_messages'] = $_forward_messages;
        return $this;
    }
    /**
     * Sticker id.
     *
     * {"type":"integer","minimum":0}
     */
    public function _sticker_id(integer $_sticker_id) : Send
    {
        $this->params['_sticker_id'] = $_sticker_id;
        return $this;
    }
    /**
     * '1' if the message is a notification (for community messages).
     *
     * {"type":"boolean"}
     */
    public function _notification(boolean $_notification) : Send
    {
        $this->params['_notification'] = $_notification;
        return $this;
    }
}