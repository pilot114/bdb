<?php

namespace Bdb\Addons\VK\Method;

/**
 * Sets an application screen name (up to 17 characters), that is shown to the user in the left menu.
 */
class Account_SetNameInMenu extends \Bdb\Addons\VK\BaseMethod
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    public function __construct($client, $defaultQuery)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('account.setNameInMenu');
    }
    /**
     * User ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function user_id(integer $user_id) : Account_SetNameInMenu
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Application screen name.
     *
     * {"type":"string","maxLength":17}
     */
    public function _name(string $name) : Account_SetNameInMenu
    {
        $this->params['name'] = $name;
        return $this;
    }
}