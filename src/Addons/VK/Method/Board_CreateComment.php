<?php

namespace Bdb\Addons\VK\Method;

/**
 * Adds a comment on a topic on a community's discussion board.
 */
class Board_CreateComment extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('board.createComment');
    }
    /**
     * ID of the community that owns the discussion board.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : Board_CreateComment
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * ID of the topic to be commented on.
     *
     * {"type":"integer","minimum":0}
     */
    public function topic_id(integer $topic_id) : Board_CreateComment
    {
        $this->params['topic_id'] = $topic_id;
        return $this;
    }
    /**
     * (Required if 'attachments' is not set.) Text of the comment.
     *
     * {"type":"string"}
     */
    public function _message(string $message) : Board_CreateComment
    {
        $this->params['message'] = $message;
        return $this;
    }
    /**
     * (Required if 'text' is not set.) List of media objects attached to the comment, in the following format:; "<owner_id>_<media_id>,<owner_id>_<media_id>"; '' — Type of media object:; 'photo' — photo; 'video' — video; 'audio' — audio; 'doc' — document; '<owner_id>' — ID of the media owner. ; '<media_id>' — Media ID.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _attachments(array $attachments) : Board_CreateComment
    {
        $this->params['attachments'] = $attachments;
        return $this;
    }
    /**
     * '1' — to post the comment as by the community; '0' — to post the comment as by the user (default)
     *
     * {"type":"boolean"}
     */
    public function _from_group(boolean $from_group) : Board_CreateComment
    {
        $this->params['from_group'] = $from_group;
        return $this;
    }
    /**
     * Sticker ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _sticker_id(integer $sticker_id) : Board_CreateComment
    {
        $this->params['sticker_id'] = $sticker_id;
        return $this;
    }
    /**
     * Unique identifier to avoid repeated comments.
     *
     * {"type":"string"}
     */
    public function _guid(string $guid) : Board_CreateComment
    {
        $this->params['guid'] = $guid;
        return $this;
    }
}