<?php

namespace Bdb\Addons\VK\Method;

/**
 * Removes a profile from user faves.
 */
class Fave_RemoveUser extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('fave.removeUser');
    }
    /**
     * Profile ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function user_id(integer $user_id) : Fave_RemoveUser
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}