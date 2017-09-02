<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of tags on a video.
 */
class Video_GetTags extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('video.getTags');
    }
    /**
     * ID of the user or community that owns the video.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $owner_id) : Video_GetTags
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Video ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function video_id(integer $video_id) : Video_GetTags
    {
        $this->params['video_id'] = $video_id;
        return $this;
    }
}