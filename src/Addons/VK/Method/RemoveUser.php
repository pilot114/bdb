<?php

namespace Bdb\Addons\VK\Method;

/**
 * Removes a profile from user faves.
 */
class RemoveUser
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
    public function user_id(integer $user_id) : RemoveUser
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}