<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns one of the previously set game levels of one or more users in the application.
 */
class Secure_GetUserLevel extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('secure.getUserLevel');
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"integer"}}
     */
    public function user_ids(array $user_ids) : Secure_GetUserLevel
    {
        $this->params['user_ids'] = $user_ids;
        return $this;
    }
}