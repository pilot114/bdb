<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of photos with tags that have not been viewed.
 */
class Photos_GetNewTags extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('photos.getNewTags');
    }
    /**
     * Offset needed to return a specific subset of photos.
     *
     * {"type":"integer"}
     */
    public function _offset(integer $offset) : Photos_GetNewTags
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of photos to return.
     *
     * {"type":"integer","minimum":0,"maximum":100,"default":20}
     */
    public function _count(integer $count) : Photos_GetNewTags
    {
        $this->params['count'] = $count;
        return $this;
    }
}