<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of videos that the current user has liked.;
 */
class GetVideos
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Offset needed to return a specific subset of videos.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetVideos
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of videos to return.
     *
     * {"type":"integer","minimum":0,"default":50}
     */
    public function _count(integer $_count) : GetVideos
    {
        $this->params['_count'] = $_count;
        return $this;
    }
    /**
     * Return an additional information about videos. Also returns all owners profiles and groups.
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $_extended) : GetVideos
    {
        $this->params['_extended'] = $_extended;
        return $this;
    }
}