<?php

namespace Bdb\Addons\VK\Method;

/**
 * not description
 */
class Video_GetAlbumsByVideo extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('video.getAlbumsByVideo');
    }
    /**
     * not description
     *
     * {"type":"int"}
     */
    public function _target_id(int $target_id) : Video_GetAlbumsByVideo
    {
        $this->params['target_id'] = $target_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"int"}
     */
    public function owner_id(int $owner_id) : Video_GetAlbumsByVideo
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"int","minimum":0}
     */
    public function video_id(int $video_id) : Video_GetAlbumsByVideo
    {
        $this->params['video_id'] = $video_id;
        return $this;
    }
    /**
     * 
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $extended) : Video_GetAlbumsByVideo
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}