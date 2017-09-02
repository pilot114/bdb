<?php

namespace Bdb\Addons\VK\Method;

/**
 * Removes a tag from a video.
 */
class Video_RemoveTag extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('video.removeTag');
    }
    /**
     * Tag ID.
     *
     * {"type":"integer"}
     */
    public function tag_id(integer $tag_id) : Video_RemoveTag
    {
        $this->params['tag_id'] = $tag_id;
        return $this;
    }
    /**
     * ID of the user or community that owns the video.
     *
     * {"type":"integer","minimum":0}
     */
    public function _owner_id(integer $owner_id) : Video_RemoveTag
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Video ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function video_id(integer $video_id) : Video_RemoveTag
    {
        $this->params['video_id'] = $video_id;
        return $this;
    }
}