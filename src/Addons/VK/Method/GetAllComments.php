<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of comments on a specific photo album or all albums of the user sorted in reverse chronological order.
 */
class GetAllComments
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of the user or community that owns the album(s).
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $_owner_id) : GetAllComments
    {
        $this->params['_owner_id'] = $_owner_id;
        return $this;
    }
    /**
     * Album ID. If the parameter is not set, comments on all of the user's albums will be returned.
     *
     * {"type":"integer","minimum":0}
     */
    public function _album_id(integer $_album_id) : GetAllComments
    {
        $this->params['_album_id'] = $_album_id;
        return $this;
    }
    /**
     * '1' — to return an additional 'likes' field; '0' — (default)
     *
     * {"type":"boolean"}
     */
    public function _need_likes(boolean $_need_likes) : GetAllComments
    {
        $this->params['_need_likes'] = $_need_likes;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of comments. By default, '0'.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetAllComments
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of comments to return. By default, '20'. Maximum value, '100'.
     *
     * {"type":"integer","minimum":0,"default":20,"maximum":100}
     */
    public function _count(integer $_count) : GetAllComments
    {
        $this->params['_count'] = $_count;
        return $this;
    }
}