<?php

namespace Bdb\Addons\VK\Method;

/**
 * Restores a deleted comment on a photo.
 */
class Photos_RestoreComment extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('photos.restoreComment');
    }
    /**
     * ID of the user or community that owns the photo.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $owner_id) : Photos_RestoreComment
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * ID of the deleted comment.
     *
     * {"type":"integer"}
     */
    public function comment_id(integer $comment_id) : Photos_RestoreComment
    {
        $this->params['comment_id'] = $comment_id;
        return $this;
    }
}