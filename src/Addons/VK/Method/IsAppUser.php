<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns information whether a user installed the application.
 */
class IsAppUser
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * not description
     *
     * {"type":"integer"}
     */
    public function _user_id(integer $_user_id) : IsAppUser
    {
        $this->params['_user_id'] = $_user_id;
        return $this;
    }
}