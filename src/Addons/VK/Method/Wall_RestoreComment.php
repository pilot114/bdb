<?php

namespace Bdb\Addons\VK\Method;

/**
 * Restores a comment deleted from a user wall or community wall.;
 */
class Wall_RestoreComment extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('wall.restoreComment');
    }
    /**
     * User ID or community ID. Use a negative value to designate a community ID.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $owner_id) : Wall_RestoreComment
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Comment ID.
     *
     * {"type":"integer"}
     */
    public function comment_id(integer $comment_id) : Wall_RestoreComment
    {
        $this->params['comment_id'] = $comment_id;
        return $this;
    }
}