<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns list of videos in which the user is tagged.
 */
class Video_GetUserVideos extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('video.getUserVideos');
    }
    /**
     * User ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _user_id(integer $user_id) : Video_GetUserVideos
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of videos.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $offset) : Video_GetUserVideos
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of videos to return.
     *
     * {"type":"integer","minimum":0,"default":20,"maximum":100}
     */
    public function _count(integer $count) : Video_GetUserVideos
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * 
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $extended) : Video_GetUserVideos
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}