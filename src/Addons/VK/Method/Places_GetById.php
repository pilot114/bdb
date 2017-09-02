<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns information about locations by their IDs.
 */
class Places_GetById extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('places.getById');
    }
    /**
     * Location IDs.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function places(array $places) : Places_GetById
    {
        $this->params['places'] = $places;
        return $this;
    }
}