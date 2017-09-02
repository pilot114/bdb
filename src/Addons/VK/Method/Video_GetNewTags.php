<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of videos with tags that have not been viewed.
 */
class Video_GetNewTags extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('video.getNewTags');
    }
    /**
     * Offset needed to return a specific subset of videos.
     *
     * {"type":"integer"}
     */
    public function _offset(integer $offset) : Video_GetNewTags
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of videos to return.
     *
     * {"type":"integer","minimum":0,"maximum":100,"default":20}
     */
    public function _count(integer $count) : Video_GetNewTags
    {
        $this->params['count'] = $count;
        return $this;
    }
}