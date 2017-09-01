<?php

namespace Bdb\Addons\VK\Method;

/**
 * Allows sending messages from community to the current user.
 */
class AllowMessagesFromGroup
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
    public function group_id(integer $group_id) : AllowMessagesFromGroup
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}