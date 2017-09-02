<?php

namespace Bdb\Addons\VK\Method;

/**
 * Deletes all request notifications from the current app.
 */
class Apps_DeleteAppRequests extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('apps.deleteAppRequests');
    }
}