<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of photos in which a user is tagged.
 */
class Photos_GetUserPhotos extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('photos.getUserPhotos');
    }
    /**
     * User ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _user_id(integer $user_id) : Photos_GetUserPhotos
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of photos. By default, '0'.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $offset) : Photos_GetUserPhotos
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of photos to return. Maximum value is 1000.
     *
     * {"type":"integer","minimum":0,"default":20,"maximum":1000}
     */
    public function _count(integer $count) : Photos_GetUserPhotos
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * '1' — to return an additional 'likes' field; '0' — (default)
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $extended) : Photos_GetUserPhotos
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Sort order:; '1' — by date the tag was added in ascending order; '0' — by date the tag was added in descending order
     *
     * {"type":"string"}
     */
    public function _sort(string $sort) : Photos_GetUserPhotos
    {
        $this->params['sort'] = $sort;
        return $this;
    }
}