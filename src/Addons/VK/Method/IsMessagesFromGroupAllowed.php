<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns information whether sending messages from the community to current user is allowed.
 */
class IsMessagesFromGroupAllowed
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Group ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : IsMessagesFromGroupAllowed
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * User ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function user_id(integer $user_id) : IsMessagesFromGroupAllowed
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}