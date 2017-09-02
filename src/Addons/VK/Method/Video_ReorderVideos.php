<?php

namespace Bdb\Addons\VK\Method;

/**
 * Reorders the video in the video album.
 */
class Video_ReorderVideos extends \Bdb\Addons\VK\BaseMethod
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    public function __construct($client, $defaultQuery)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('video.reorderVideos');
    }
    /**
     * ID of the user or community that owns the album with videos.
     *
     * {"type":"integer"}
     */
    public function _target_id(integer $target_id) : Video_ReorderVideos
    {
        $this->params['target_id'] = $target_id;
        return $this;
    }
    /**
     * ID of the video album.
     *
     * {"type":"integer"}
     */
    public function _album_id(integer $album_id) : Video_ReorderVideos
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
    /**
     * ID of the user or community that owns the video.
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : Video_ReorderVideos
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * ID of the video.
     *
     * {"type":"integer","minimum":0}
     */
    public function video_id(integer $video_id) : Video_ReorderVideos
    {
        $this->params['video_id'] = $video_id;
        return $this;
    }
    /**
     * ID of the user or community that owns the video before which the video in question shall be placed.
     *
     * {"type":"integer"}
     */
    public function _before_owner_id(integer $before_owner_id) : Video_ReorderVideos
    {
        $this->params['before_owner_id'] = $before_owner_id;
        return $this;
    }
    /**
     * ID of the video before which the video in question shall be placed.
     *
     * {"type":"integer","minimum":0}
     */
    public function _before_video_id(integer $before_video_id) : Video_ReorderVideos
    {
        $this->params['before_video_id'] = $before_video_id;
        return $this;
    }
    /**
     * ID of the user or community that owns the video after which the photo in question shall be placed.
     *
     * {"type":"integer"}
     */
    public function _after_owner_id(integer $after_owner_id) : Video_ReorderVideos
    {
        $this->params['after_owner_id'] = $after_owner_id;
        return $this;
    }
    /**
     * ID of the video after which the photo in question shall be placed.
     *
     * {"type":"integer","minimum":0}
     */
    public function _after_video_id(integer $after_video_id) : Video_ReorderVideos
    {
        $this->params['after_video_id'] = $after_video_id;
        return $this;
    }
}