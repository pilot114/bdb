<?php

namespace Bdb\Addons\VK\Method;

/**
 * Adds user to the banlist.
 */
class BanUser
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
    public function user_id(integer $user_id) : BanUser
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}