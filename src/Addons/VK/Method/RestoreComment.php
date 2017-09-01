<?php

namespace Bdb\Addons\VK\Method;

/**
 * Restores a recently deleted comment
 */
class RestoreComment
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * identifier of an item owner community; "Note that community id in the 'owner_id' parameter should be negative number. For example 'owner_id'=-1 matches the [vk.com/apiclub|VK API] community "
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : RestoreComment
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * deleted comment id
     *
     * {"type":"integer","minimum":0}
     */
    public function comment_id(integer $comment_id) : RestoreComment
    {
        $this->params['comment_id'] = $comment_id;
        return $this;
    }
}