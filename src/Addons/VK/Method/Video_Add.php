<?php

namespace Bdb\Addons\VK\Method;

/**
 * Adds a video to a user or community page.
 */
class Video_Add extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('video.add');
    }
    /**
     * identifier of a user or community to add a video to.; Use a negative value to designate a community ID.
     *
     * {"type":"integer"}
     */
    public function _target_id(integer $target_id) : Video_Add
    {
        $this->params['target_id'] = $target_id;
        return $this;
    }
    /**
     * Video ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function video_id(integer $video_id) : Video_Add
    {
        $this->params['video_id'] = $video_id;
        return $this;
    }
    /**
     * ID of the user or community that owns the video.; Use a negative value to designate a community ID.
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : Video_Add
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
}