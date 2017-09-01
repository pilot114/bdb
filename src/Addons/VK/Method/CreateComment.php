<?php

namespace Bdb\Addons\VK\Method;

/**
 * Creates a new comment for an item.
 */
class CreateComment
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of an item owner community.
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : CreateComment
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Item ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function item_id(integer $item_id) : CreateComment
    {
        $this->params['item_id'] = $item_id;
        return $this;
    }
    /**
     * Comment text (required if 'attachments' parameter is not specified)
     *
     * {"type":"string"}
     */
    public function _message(string $_message) : CreateComment
    {
        $this->params['_message'] = $_message;
        return $this;
    }
    /**
     * Comma-separated list of objects attached to a comment. The field is submitted the following way: ; "'<owner_id>_<media_id>,<owner_id>_<media_id>'"; ; '' - media attachment type:; "'photo' - photo; 'video' - video; 'audio' - audio; 'doc' - document"; ; '<owner_id>' - media owner id; '<media_id>' - media attachment id; ; For example:; "photo100172_166443618,photo66748_265827614";
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _attachments(array $_attachments) : CreateComment
    {
        $this->params['_attachments'] = $_attachments;
        return $this;
    }
    /**
     * '1' - comment will be published on behalf of a community, '0' - on behalf of a user (by default).
     *
     * {"type":"boolean"}
     */
    public function _from_group(boolean $_from_group) : CreateComment
    {
        $this->params['_from_group'] = $_from_group;
        return $this;
    }
    /**
     * ID of a comment to reply with current comment to.
     *
     * {"type":"integer","minimum":0}
     */
    public function _reply_to_comment(integer $_reply_to_comment) : CreateComment
    {
        $this->params['_reply_to_comment'] = $_reply_to_comment;
        return $this;
    }
    /**
     * Sticker ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _sticker_id(integer $_sticker_id) : CreateComment
    {
        $this->params['_sticker_id'] = $_sticker_id;
        return $this;
    }
    /**
     * Random value to avoid resending one comment.
     *
     * {"type":"string"}
     */
    public function _guid(string $_guid) : CreateComment
    {
        $this->params['_guid'] = $_guid;
        return $this;
    }
}