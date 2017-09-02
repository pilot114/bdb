<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of comments on a specific photo album or all albums of the user sorted in reverse chronological order.
 */
class Photos_GetAllComments extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('photos.getAllComments');
    }
    /**
     * ID of the user or community that owns the album(s).
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $owner_id) : Photos_GetAllComments
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Album ID. If the parameter is not set, comments on all of the user's albums will be returned.
     *
     * {"type":"integer","minimum":0}
     */
    public function _album_id(integer $album_id) : Photos_GetAllComments
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
    /**
     * '1' — to return an additional 'likes' field; '0' — (default)
     *
     * {"type":"boolean"}
     */
    public function _need_likes(boolean $need_likes) : Photos_GetAllComments
    {
        $this->params['need_likes'] = $need_likes;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of comments. By default, '0'.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $offset) : Photos_GetAllComments
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of comments to return. By default, '20'. Maximum value, '100'.
     *
     * {"type":"integer","minimum":0,"default":20,"maximum":100}
     */
    public function _count(integer $count) : Photos_GetAllComments
    {
        $this->params['count'] = $count;
        return $this;
    }
}