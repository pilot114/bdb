<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of comments on a photo.
 */
class Photos_GetComments extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('photos.getComments');
    }
    /**
     * ID of the user or community that owns the photo.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $owner_id) : Photos_GetComments
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Photo ID.
     *
     * {"type":"integer"}
     */
    public function photo_id(integer $photo_id) : Photos_GetComments
    {
        $this->params['photo_id'] = $photo_id;
        return $this;
    }
    /**
     * '1' — to return an additional 'likes' field; '0' — (default)
     *
     * {"type":"boolean"}
     */
    public function _need_likes(boolean $need_likes) : Photos_GetComments
    {
        $this->params['need_likes'] = $need_likes;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"integer","minimum":0}
     */
    public function _start_comment_id(integer $start_comment_id) : Photos_GetComments
    {
        $this->params['start_comment_id'] = $start_comment_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of comments. By default, '0'.
     *
     * {"type":"integer"}
     */
    public function _offset(integer $offset) : Photos_GetComments
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of comments to return.
     *
     * {"type":"integer","minimum":0,"default":20,"maximum":100}
     */
    public function _count(integer $count) : Photos_GetComments
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Sort order:; 'asc' — old first; 'desc' — new first
     *
     * {"type":"string","enum":["asc","desc"],"enumNames":["old first","new first"]}
     */
    public function _sort(string $sort) : Photos_GetComments
    {
        $this->params['sort'] = $sort;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function _access_key(string $access_key) : Photos_GetComments
    {
        $this->params['access_key'] = $access_key;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $extended) : Photos_GetComments
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Photos_GetComments
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}