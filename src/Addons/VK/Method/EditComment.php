<?php

namespace Bdb\Addons\VK\Method;

/**
 * Chages item comment's text
 */
class EditComment
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
    public function owner_id(integer $owner_id) : EditComment
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Comment ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function comment_id(integer $comment_id) : EditComment
    {
        $this->params['comment_id'] = $comment_id;
        return $this;
    }
    /**
     * New comment text (required if 'attachments' are not specified); ; 2048 symbols maximum.
     *
     * {"type":"string","maxLength":2048}
     */
    public function _message(string $_message) : EditComment
    {
        $this->params['_message'] = $_message;
        return $this;
    }
    /**
     * Comma-separated list of objects attached to a comment. The field is submitted the following way: ; "'<owner_id>_<media_id>,<owner_id>_<media_id>'"; ; '' - media attachment type:; "'photo' - photo; 'video' - video; 'audio' - audio; 'doc' - document"; ; '<owner_id>' - media owner id; '<media_id>' - media attachment id; ; For example:; "photo100172_166443618,photo66748_265827614";
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _attachments(array $_attachments) : EditComment
    {
        $this->params['_attachments'] = $_attachments;
        return $this;
    }
}