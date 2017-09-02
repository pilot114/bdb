<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns information about countries by their IDs.
 */
class Database_GetCountriesById extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('database.getCountriesById');
    }
    /**
     * Country IDs.
     *
     * {"type":"array","items":{"type":"integer","minimum":0},"maxItems":1000}
     */
    public function _country_ids(array $country_ids) : Database_GetCountriesById
    {
        $this->params['country_ids'] = $country_ids;
        return $this;
    }
}