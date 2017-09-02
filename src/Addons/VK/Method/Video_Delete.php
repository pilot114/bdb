<?php

namespace Bdb\Addons\VK\Method;

/**
 * Deletes a video from a user or community page.
 */
class Video_Delete extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('video.delete');
    }
    /**
     * Video ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function video_id(integer $video_id) : Video_Delete
    {
        $this->params['video_id'] = $video_id;
        return $this;
    }
    /**
     * ID of the user or community that owns the video.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $owner_id) : Video_Delete
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"integer"}
     */
    public function _target_id(integer $target_id) : Video_Delete
    {
        $this->params['target_id'] = $target_id;
        return $this;
    }
}