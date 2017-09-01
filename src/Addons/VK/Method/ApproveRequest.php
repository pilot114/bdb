<?php

namespace Bdb\Addons\VK\Method;

/**
 * Allows to approve join request to the community.
 */
class ApproveRequest
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Community ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : ApproveRequest
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * User ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function user_id(integer $user_id) : ApproveRequest
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}