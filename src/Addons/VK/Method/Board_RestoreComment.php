<?php

namespace Bdb\Addons\VK\Method;

/**
 * Restores a comment deleted from a topic on a community's discussion board.
 */
class Board_RestoreComment extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('board.restoreComment');
    }
    /**
     * ID of the community that owns the discussion board.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : Board_RestoreComment
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Topic ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function topic_id(integer $topic_id) : Board_RestoreComment
    {
        $this->params['topic_id'] = $topic_id;
        return $this;
    }
    /**
     * Comment ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function comment_id(integer $comment_id) : Board_RestoreComment
    {
        $this->params['comment_id'] = $comment_id;
        return $this;
    }
}