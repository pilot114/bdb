<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of all types of locations.
 */
class Places_GetTypes extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('places.getTypes');
    }
}