<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of comments on a topic on a community's discussion board.
 */
class Board_GetComments extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('board.getComments');
    }
    /**
     * ID of the community that owns the discussion board.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : Board_GetComments
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Topic ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function topic_id(integer $topic_id) : Board_GetComments
    {
        $this->params['topic_id'] = $topic_id;
        return $this;
    }
    /**
     * '1' — to return the 'likes' field; '0' — not to return the 'likes' field (default)
     *
     * {"type":"boolean"}
     */
    public function _need_likes(boolean $need_likes) : Board_GetComments
    {
        $this->params['need_likes'] = $need_likes;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"integer","minimum":0}
     */
    public function _start_comment_id(integer $start_comment_id) : Board_GetComments
    {
        $this->params['start_comment_id'] = $start_comment_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of comments.
     *
     * {"type":"integer"}
     */
    public function _offset(integer $offset) : Board_GetComments
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of comments to return.
     *
     * {"type":"integer","minimum":0,"default":20,"maximum":100}
     */
    public function _count(integer $count) : Board_GetComments
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * '1' — to return information about users who posted comments; '0' — to return no additional fields (default)
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $extended) : Board_GetComments
    {
        $this->params['extended'] = $extended;
        return $this;
    }
    /**
     * Sort order:; 'asc' — by creation date in chronological order; 'desc' — by creation date in reverse chronological order;
     *
     * {"type":"string","enum":["asc","desc"],"enumNames":["chronological","reverse chronological"]}
     */
    public function _sort(string $sort) : Board_GetComments
    {
        $this->params['sort'] = $sort;
        return $this;
    }
}