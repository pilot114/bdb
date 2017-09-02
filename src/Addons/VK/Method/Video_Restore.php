<?php

namespace Bdb\Addons\VK\Method;

/**
 * Restores a previously deleted video.
 */
class Video_Restore extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('video.restore');
    }
    /**
     * Video ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function video_id(integer $video_id) : Video_Restore
    {
        $this->params['video_id'] = $video_id;
        return $this;
    }
    /**
     * ID of the user or community that owns the video.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $owner_id) : Video_Restore
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
}