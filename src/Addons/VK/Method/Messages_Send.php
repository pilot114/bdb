<?php

namespace Bdb\Addons\VK\Method;

/**
 * Sends a message.
 */
class Messages_Send extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('messages.send');
    }
    /**
     * User ID (by default — current user).
     *
     * {"type":"integer"}
     */
    public function _user_id(integer $user_id) : Messages_Send
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Unique identifier to avoid resending the message.
     *
     * {"type":"integer"}
     */
    public function _random_id(integer $random_id) : Messages_Send
    {
        $this->params['random_id'] = $random_id;
        return $this;
    }
    /**
     * Destination ID.; ; "For user:; 'User ID', e.g. '12345'.; ; For chat:; '2000000000' + 'chat_id', e.g. '2000000001'.; ; For community:; '- community ID', e.g. '-12345'.; "
     *
     * {"type":"integer"}
     */
    public function _peer_id(integer $peer_id) : Messages_Send
    {
        $this->params['peer_id'] = $peer_id;
        return $this;
    }
    /**
     * User's short address (for example, 'illarionov').
     *
     * {"type":"string"}
     */
    public function _domain(string $domain) : Messages_Send
    {
        $this->params['domain'] = $domain;
        return $this;
    }
    /**
     * ID of conversation the message will relate to.
     *
     * {"type":"integer","minimum":0}
     */
    public function _chat_id(integer $chat_id) : Messages_Send
    {
        $this->params['chat_id'] = $chat_id;
        return $this;
    }
    /**
     * IDs of message recipients (if new conversation shall be started).
     *
     * {"type":"array","items":{"type":"integer"}}
     */
    public function _user_ids(array $user_ids) : Messages_Send
    {
        $this->params['user_ids'] = $user_ids;
        return $this;
    }
    /**
     * (Required if 'attachments' is not set.) Text of the message.
     *
     * {"type":"string"}
     */
    public function _message(string $message) : Messages_Send
    {
        $this->params['message'] = $message;
        return $this;
    }
    /**
     * Geographical latitude of a check-in, in degrees (from -90 to 90).
     *
     * {"type":"float","minimum":-90,"maximum":90}
     */
    public function _lat(float $lat) : Messages_Send
    {
        $this->params['lat'] = $lat;
        return $this;
    }
    /**
     * Geographical longitude of a check-in, in degrees (from -180 to 180).
     *
     * {"type":"float","minimum":-180,"maximum":180}
     */
    public function _long(float $long) : Messages_Send
    {
        $this->params['long'] = $long;
        return $this;
    }
    /**
     * (Required if 'message' is not set.) List of objects attached to the message, separated by commas, in the following format:; "<owner_id>_<media_id>"; '' — Type of media attachment:; 'photo' — photo; 'video' — video; 'audio' — audio; 'doc' — document; 'wall' — wall post; '<owner_id>' — ID of the media attachment owner.; '<media_id>' — media attachment ID.; ; Example:; "photo100172_166443618"
     *
     * {"type":"string"}
     */
    public function _attachment(string $attachment) : Messages_Send
    {
        $this->params['attachment'] = $attachment;
        return $this;
    }
    /**
     * ID of forwarded messages, separated with a comma. Listed messages of the sender will be shown in the message body at the recipient's.; ; Example:; "123,431,544"
     *
     * {"type":"string"}
     */
    public function _forward_messages(string $forward_messages) : Messages_Send
    {
        $this->params['forward_messages'] = $forward_messages;
        return $this;
    }
    /**
     * Sticker id.
     *
     * {"type":"integer","minimum":0}
     */
    public function _sticker_id(integer $sticker_id) : Messages_Send
    {
        $this->params['sticker_id'] = $sticker_id;
        return $this;
    }
    /**
     * '1' if the message is a notification (for community messages).
     *
     * {"type":"boolean"}
     */
    public function _notification(boolean $notification) : Messages_Send
    {
        $this->params['notification'] = $notification;
        return $this;
    }
}