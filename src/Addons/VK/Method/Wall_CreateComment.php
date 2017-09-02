<?php

namespace Bdb\Addons\VK\Method;

/**
 * Adds a comment to a post on a user wall or community wall.
 */
class Wall_CreateComment extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('wall.createComment');
    }
    /**
     * User ID or community ID. Use a negative value to designate a community ID.
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Wall_CreateComment
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Post ID.
     *
     * {"type":"int","minimum":0}
     */
    public function post_id(int $post_id) : Wall_CreateComment
    {
        $this->params['post_id'] = $post_id;
        return $this;
    }
    /**
     * '1' — to post the comment as from the community;; '0' — (default) to post the comment as from the user.
     *
     * {"type":"boolean"}
     */
    public function _from_group(boolean $from_group) : Wall_CreateComment
    {
        $this->params['from_group'] = $from_group;
        return $this;
    }
    /**
     * (Required if 'attachments' is not set.) Text of the comment.
     *
     * {"type":"string"}
     */
    public function _message(string $message) : Wall_CreateComment
    {
        $this->params['message'] = $message;
        return $this;
    }
    /**
     * ID of comment to reply.
     *
     * {"type":"int"}
     */
    public function _reply_to_comment(int $reply_to_comment) : Wall_CreateComment
    {
        $this->params['reply_to_comment'] = $reply_to_comment;
        return $this;
    }
    /**
     * (Required if 'message' is not set.) List of media objects attached to the comment, in the following format:; "<owner_id>_<media_id>,<owner_id>_<media_id>"; '' — Type of media ojbect:; 'photo' — photo; 'video' — video; 'audio' — audio; 'doc' — document; '<owner_id>' — ID of the media owner.; '<media_id>' — Media ID. ; ; For example:; "photo100172_166443618,photo66748_265827614"
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _attachments(array $attachments) : Wall_CreateComment
    {
        $this->params['attachments'] = $attachments;
        return $this;
    }
    /**
     * Sticker ID.
     *
     * {"type":"int","minimum":0}
     */
    public function _sticker_id(int $sticker_id) : Wall_CreateComment
    {
        $this->params['sticker_id'] = $sticker_id;
        return $this;
    }
    /**
     * Unique identifier to avoid repeated comments.
     *
     * {"type":"string"}
     */
    public function _guid(string $guid) : Wall_CreateComment
    {
        $this->params['guid'] = $guid;
        return $this;
    }
}