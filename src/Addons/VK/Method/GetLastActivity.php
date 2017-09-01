<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a user's current status and date of last activity.
 */
class GetLastActivity
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * User ID.
     *
     * {"type":"integer"}
     */
    public function user_id(integer $user_id) : GetLastActivity
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}