<?php

namespace Bdb\Addons\VK\Method;

/**
 * Sets an application screen name (up to 17 characters), that is shown to the user in the left menu.
 */
class SetNameInMenu
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
    public function user_id(integer $user_id) : SetNameInMenu
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Application screen name.
     *
     * {"type":"string","maxLength":17}
     */
    public function _name(string $_name) : SetNameInMenu
    {
        $this->params['_name'] = $_name;
        return $this;
    }
}