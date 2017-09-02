<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns information whether a user installed the application.
 */
class Users_IsAppUser extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('users.isAppUser');
    }
    /**
     * not description
     *
     * {"type":"integer"}
     */
    public function _user_id(integer $user_id) : Users_IsAppUser
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}