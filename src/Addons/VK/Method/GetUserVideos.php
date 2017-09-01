<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns list of videos in which the user is tagged.
 */
class GetUserVideos
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * User ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _user_id(integer $_user_id) : GetUserVideos
    {
        $this->params['_user_id'] = $_user_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of videos.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetUserVideos
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of videos to return.
     *
     * {"type":"integer","minimum":0,"default":20,"maximum":100}
     */
    public function _count(integer $_count) : GetUserVideos
    {
        $this->params['_count'] = $_count;
        return $this;
    }
    /**
     * 
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $_extended) : GetUserVideos
    {
        $this->params['_extended'] = $_extended;
        return $this;
    }
}