<?php

namespace Bdb\Addons\VK\Method;

/**
 * Adds a tag on a video.
 */
class PutTag
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of the user to be tagged.
     *
     * {"type":"integer","minimum":0}
     */
    public function user_id(integer $user_id) : PutTag
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * ID of the user or community that owns the video.
     *
     * {"type":"integer","minimum":0}
     */
    public function _owner_id(integer $_owner_id) : PutTag
    {
        $this->params['_owner_id'] = $_owner_id;
        return $this;
    }
    /**
     * Video ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function video_id(integer $video_id) : PutTag
    {
        $this->params['video_id'] = $video_id;
        return $this;
    }
    /**
     * Tag text.
     *
     * {"type":"string"}
     */
    public function _tagged_name(string $_tagged_name) : PutTag
    {
        $this->params['_tagged_name'] = $_tagged_name;
        return $this;
    }
}