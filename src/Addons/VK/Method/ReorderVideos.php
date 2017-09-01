<?php

namespace Bdb\Addons\VK\Method;

/**
 * Reorders the video in the video album.
 */
class ReorderVideos
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of the user or community that owns the album with videos.
     *
     * {"type":"integer"}
     */
    public function _target_id(integer $_target_id) : ReorderVideos
    {
        $this->params['_target_id'] = $_target_id;
        return $this;
    }
    /**
     * ID of the video album.
     *
     * {"type":"integer"}
     */
    public function _album_id(integer $_album_id) : ReorderVideos
    {
        $this->params['_album_id'] = $_album_id;
        return $this;
    }
    /**
     * ID of the user or community that owns the video.
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : ReorderVideos
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * ID of the video.
     *
     * {"type":"integer","minimum":0}
     */
    public function video_id(integer $video_id) : ReorderVideos
    {
        $this->params['video_id'] = $video_id;
        return $this;
    }
    /**
     * ID of the user or community that owns the video before which the video in question shall be placed.
     *
     * {"type":"integer"}
     */
    public function _before_owner_id(integer $_before_owner_id) : ReorderVideos
    {
        $this->params['_before_owner_id'] = $_before_owner_id;
        return $this;
    }
    /**
     * ID of the video before which the video in question shall be placed.
     *
     * {"type":"integer","minimum":0}
     */
    public function _before_video_id(integer $_before_video_id) : ReorderVideos
    {
        $this->params['_before_video_id'] = $_before_video_id;
        return $this;
    }
    /**
     * ID of the user or community that owns the video after which the photo in question shall be placed.
     *
     * {"type":"integer"}
     */
    public function _after_owner_id(integer $_after_owner_id) : ReorderVideos
    {
        $this->params['_after_owner_id'] = $_after_owner_id;
        return $this;
    }
    /**
     * ID of the video after which the photo in question shall be placed.
     *
     * {"type":"integer","minimum":0}
     */
    public function _after_video_id(integer $_after_video_id) : ReorderVideos
    {
        $this->params['_after_video_id'] = $_after_video_id;
        return $this;
    }
}