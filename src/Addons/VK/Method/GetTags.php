<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of tags on a video.
 */
class GetTags
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of the user or community that owns the video.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $_owner_id) : GetTags
    {
        $this->params['_owner_id'] = $_owner_id;
        return $this;
    }
    /**
     * Video ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function video_id(integer $video_id) : GetTags
    {
        $this->params['video_id'] = $video_id;
        return $this;
    }
}