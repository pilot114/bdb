<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns the server address for photo upload in a private message for a user.
 */
class GetMessagesUploadServer
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
}