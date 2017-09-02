<?php

namespace Bdb\Addons\VK\Method;

/**
 * Deletes a comment on a post on a user wall or community wall.;
 */
class Wall_DeleteComment extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('wall.deleteComment');
    }
    /**
     * User ID or community ID. Use a negative value to designate a community ID.;
     *
     * {"type":"int"}
     */
    public function _owner_id(int $owner_id) : Wall_DeleteComment
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Comment ID.
     *
     * {"type":"int","minimum":0}
     */
    public function comment_id(int $comment_id) : Wall_DeleteComment
    {
        $this->params['comment_id'] = $comment_id;
        return $this;
    }
}