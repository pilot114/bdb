<?php

namespace Bdb\Addons\VK\Method;

/**
 * Deletes a comment on a video.
 */
class Video_DeleteComment extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('video.deleteComment');
    }
    /**
     * ID of the user or community that owns the video.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $owner_id) : Video_DeleteComment
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * ID of the comment to be deleted.
     *
     * {"type":"integer"}
     */
    public function comment_id(integer $comment_id) : Video_DeleteComment
    {
        $this->params['comment_id'] = $comment_id;
        return $this;
    }
}