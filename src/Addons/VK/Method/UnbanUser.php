<?php

namespace Bdb\Addons\VK\Method;

/**
 * Deletes user from the blacklist.
 */
class UnbanUser
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * User ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function user_id(integer $user_id) : UnbanUser
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}