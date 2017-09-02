<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns the server address for photo upload in a private message for a user.
 */
class Photos_GetMessagesUploadServer extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('photos.getMessagesUploadServer');
    }
}