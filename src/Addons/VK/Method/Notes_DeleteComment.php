<?php

namespace Bdb\Addons\VK\Method;

/**
 * Deletes a comment on a note.
 */
class Notes_DeleteComment extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('notes.deleteComment');
    }
    /**
     * Comment ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function comment_id(integer $comment_id) : Notes_DeleteComment
    {
        $this->params['comment_id'] = $comment_id;
        return $this;
    }
    /**
     * Note owner ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _owner_id(integer $owner_id) : Notes_DeleteComment
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
}