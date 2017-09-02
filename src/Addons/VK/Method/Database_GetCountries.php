<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of countries.
 */
class Database_GetCountries extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('database.getCountries');
    }
    /**
     * '1' — to return a full list of all countries; '0' — to return a list of countries near the current user's country (default).;
     *
     * {"type":"boolean"}
     */
    public function _need_all(boolean $need_all) : Database_GetCountries
    {
        $this->params['need_all'] = $need_all;
        return $this;
    }
    /**
     * Country codes in [vk.com/dev/country_codes|ISO 3166-1 alpha-2] standard.
     *
     * {"type":"string"}
     */
    public function _code(string $code) : Database_GetCountries
    {
        $this->params['code'] = $code;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of countries.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $offset) : Database_GetCountries
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of countries to return.
     *
     * {"type":"integer","minimum":0,"default":100,"maximum":1000}
     */
    public function _count(integer $count) : Database_GetCountries
    {
        $this->params['count'] = $count;
        return $this;
    }
}