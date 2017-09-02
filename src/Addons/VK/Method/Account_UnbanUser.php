<?php

namespace Bdb\Addons\VK\Method;

/**
 * Deletes user from the blacklist.
 */
class Account_UnbanUser extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('account.unbanUser');
    }
    /**
     * User ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function user_id(integer $user_id) : Account_UnbanUser
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}