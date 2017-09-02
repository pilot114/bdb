<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of videos that the current user has liked.;
 */
class Fave_GetVideos extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('fave.getVideos');
    }
    /**
     * Offset needed to return a specific subset of videos.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Fave_GetVideos
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of videos to return.
     *
     * {"type":"int","minimum":0,"default":50}
     */
    public function _count(int $count) : Fave_GetVideos
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Return an additional information about videos. Also returns all owners profiles and groups.
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $extended) : Fave_GetVideos
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}