<?php

namespace Bdb\Addons\VK\Method;

/**
 * Denies sending message from community to the current user.
 */
class DenyMessagesFromGroup
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
    public function group_id(integer $group_id) : DenyMessagesFromGroup
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}