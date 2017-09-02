<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns information about cities by their IDs.
 */
class Database_GetCitiesById extends \Bdb\Addons\VK\BaseMethod
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    public function __construct($client, $defaultQuery)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('database.getCitiesById');
    }
    /**
     * City IDs.
     *
     * {"type":"array","items":{"type":"integer","minimum":0},"maxItems":1000}
     */
    public function _city_ids(array $city_ids) : Database_GetCitiesById
    {
        $this->params['city_ids'] = $city_ids;
        return $this;
    }
}