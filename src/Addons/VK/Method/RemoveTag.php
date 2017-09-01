<?php

namespace Bdb\Addons\VK\Method;

/**
 * Removes a tag from a video.
 */
class RemoveTag
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Tag ID.
     *
     * {"type":"integer"}
     */
    public function tag_id(integer $tag_id) : RemoveTag
    {
        $this->params['tag_id'] = $tag_id;
        return $this;
    }
    /**
     * ID of the user or community that owns the video.
     *
     * {"type":"integer","minimum":0}
     */
    public function _owner_id(integer $_owner_id) : RemoveTag
    {
        $this->params['_owner_id'] = $_owner_id;
        return $this;
    }
    /**
     * Video ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function video_id(integer $video_id) : RemoveTag
    {
        $this->params['video_id'] = $video_id;
        return $this;
    }
}