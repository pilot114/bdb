<?php

namespace Bdb\Addons\VK\Method;

/**
 * Marks all incoming friend requests as viewed.
 */
class Friends_DeleteAllRequests extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('friends.deleteAllRequests');
    }
}