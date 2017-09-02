<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of comments on a post on a user wall or community wall.
 */
class Wall_GetComments extends \Bdb\Addons\VK\BaseMethod
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    public function __construct($client, $defaultQuery)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('wall.getComments');
    }
    /**
     * User ID or community ID. Use a negative value to designate a community ID.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $owner_id) : Wall_GetComments
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Post ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function post_id(integer $post_id) : Wall_GetComments
    {
        $this->params['post_id'] = $post_id;
        return $this;
    }
    /**
     * '1' — to return the 'likes' field; '0' — not to return the 'likes' field (default)
     *
     * {"type":"boolean"}
     */
    public function _need_likes(boolean $need_likes) : Wall_GetComments
    {
        $this->params['need_likes'] = $need_likes;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"integer","minimum":0}
     */
    public function _start_comment_id(integer $start_comment_id) : Wall_GetComments
    {
        $this->params['start_comment_id'] = $start_comment_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of comments.
     *
     * {"type":"integer"}
     */
    public function _offset(integer $offset) : Wall_GetComments
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of comments to return (maximum 100).
     *
     * {"type":"integer","minimum":0,"maximum":100}
     */
    public function _count(integer $count) : Wall_GetComments
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Sort order:; 'asc' — chronological; 'desc' — reverse chronological
     *
     * {"type":"string","enum":["asc","desc"],"enumNames":["chronological","reverse chronological"]}
     */
    public function _sort(string $sort) : Wall_GetComments
    {
        $this->params['sort'] = $sort;
        return $this;
    }
    /**
     * Number of characters at which to truncate comments when previewed. By default, '90'. Specify '0' if you do not want to truncate comments.;
     *
     * {"type":"integer","minimum":0,"default":90}
     */
    public function _preview_length(integer $preview_length) : Wall_GetComments
    {
        $this->params['preview_length'] = $preview_length;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $extended) : Wall_GetComments
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}