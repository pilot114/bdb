<?php

namespace Bdb\Addons\VK\Method;

/**
 * Adds user to the banlist.
 */
class Account_BanUser extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('account.banUser');
    }
    /**
     * User ID.
     *
     * {"type":"int","minimum":0}
     */
    public function user_id(int $user_id) : Account_BanUser
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}