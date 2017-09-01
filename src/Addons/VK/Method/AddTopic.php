<?php

namespace Bdb\Addons\VK\Method;

/**
 * Creates a new topic on a community's discussion board.
 */
class AddTopic
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of the community that owns the discussion board.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : AddTopic
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Topic title.
     *
     * {"type":"string"}
     */
    public function title(string $title) : AddTopic
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * Text of the topic.
     *
     * {"type":"string"}
     */
    public function _text(string $_text) : AddTopic
    {
        $this->params['_text'] = $_text;
        return $this;
    }
    /**
     * For a community:; '1' — to post the topic as by the community; '0' — to post the topic as by the user (default)
     *
     * {"type":"boolean"}
     */
    public function _from_group(boolean $_from_group) : AddTopic
    {
        $this->params['_from_group'] = $_from_group;
        return $this;
    }
    /**
     * List of media objects attached to the topic, in the following format:; "<owner_id>_<media_id>,<owner_id>_<media_id>"; '' — Type of media object:; 'photo' — photo; 'video' — video; 'audio' — audio; 'doc' — document; '<owner_id>' — ID of the media owner. ; '<media_id>' — Media ID.; ; Example:; "photo100172_166443618,photo66748_265827614"; ; "NOTE: If you try to attach more than one reference, an error will be thrown.";
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _attachments(array $_attachments) : AddTopic
    {
        $this->params['_attachments'] = $_attachments;
        return $this;
    }
}