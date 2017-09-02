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
     * {"type":"integer"}
     */
    public function _target_id(integer $target_id) : Video_GetAlbumsByVideo
    {
        $this->params['target_id'] = $target_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : Video_GetAlbumsByVideo
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"integer","minimum":0}
     */
    public function video_id(integer $video_id) : Video_GetAlbumsByVideo
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