<?php

namespace Bdb\Addons\VK\Method;

/**
 * not description
 */
class GetAlbumsByVideo
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * not description
     *
     * {"type":"integer"}
     */
    public function _target_id(integer $_target_id) : GetAlbumsByVideo
    {
        $this->params['_target_id'] = $_target_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : GetAlbumsByVideo
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"integer","minimum":0}
     */
    public function video_id(integer $video_id) : GetAlbumsByVideo
    {
        $this->params['video_id'] = $video_id;
        return $this;
    }
    /**
     * 
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $_extended) : GetAlbumsByVideo
    {
        $this->params['_extended'] = $_extended;
        return $this;
    }
}