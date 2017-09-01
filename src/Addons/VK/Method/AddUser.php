<?php

namespace Bdb\Addons\VK\Method;

/**
 * Adds a profile to user faves.
 */
class AddUser
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Profile ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function user_id(integer $user_id) : AddUser
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}