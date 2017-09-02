<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of schools.
 */
class Database_GetSchools extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('database.getSchools');
    }
    /**
     * Search query.
     *
     * {"type":"string"}
     */
    public function _q(string $q) : Database_GetSchools
    {
        $this->params['q'] = $q;
        return $this;
    }
    /**
     * City ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function city_id(integer $city_id) : Database_GetSchools
    {
        $this->params['city_id'] = $city_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of schools.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $offset) : Database_GetSchools
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of schools to return.
     *
     * {"type":"integer","minimum":0,"default":100,"maximum":10000}
     */
    public function _count(integer $count) : Database_GetSchools
    {
        $this->params['count'] = $count;
        return $this;
    }
}