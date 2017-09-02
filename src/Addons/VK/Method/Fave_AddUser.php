<?php

namespace Bdb\Addons\VK\Method;

/**
 * Adds a profile to user faves.
 */
class Fave_AddUser extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('fave.addUser');
    }
    /**
     * Profile ID.
     *
     * {"type":"int","minimum":0}
     */
    public function user_id(int $user_id) : Fave_AddUser
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}