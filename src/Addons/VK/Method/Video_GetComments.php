<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of comments on a video.
 */
class Video_GetComments extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('video.getComments');
    }
    /**
     * ID of the user or community that owns the video.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $owner_id) : Video_GetComments
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Video ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function video_id(integer $video_id) : Video_GetComments
    {
        $this->params['video_id'] = $video_id;
        return $this;
    }
    /**
     * '1' — to return an additional 'likes' field
     *
     * {"type":"boolean"}
     */
    public function _need_likes(boolean $need_likes) : Video_GetComments
    {
        $this->params['need_likes'] = $need_likes;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"integer","minimum":0}
     */
    public function _start_comment_id(integer $start_comment_id) : Video_GetComments
    {
        $this->params['start_comment_id'] = $start_comment_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of comments.
     *
     * {"type":"integer"}
     */
    public function _offset(integer $offset) : Video_GetComments
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of comments to return.
     *
     * {"type":"integer","minimum":0,"default":20,"maximum":100}
     */
    public function _count(integer $count) : Video_GetComments
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Sort order:; 'asc' — oldest comment first; 'desc' — newest comment first
     *
     * {"type":"string","enum":["asc","desc"],"enumNames":["oldest comment first","newest comment first"]}
     */
    public function _sort(string $sort) : Video_GetComments
    {
        $this->params['sort'] = $sort;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $extended) : Video_GetComments
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}