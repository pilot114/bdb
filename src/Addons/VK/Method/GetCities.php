<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of cities.
 */
class GetCities
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    /**
     * Country ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function country_id(integer $country_id) : GetCities
    {
        $this->params['country_id'] = $country_id;
        return $this;
    }
    /**
     * Region ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _region_id(integer $_region_id) : GetCities
    {
        $this->params['_region_id'] = $_region_id;
        return $this;
    }
    /**
     * Search query.
     *
     * {"type":"string"}
     */
    public function _q(string $_q) : GetCities
    {
        $this->params['_q'] = $_q;
        return $this;
    }
    /**
     * '1' — to return all cities in the country; '0' — to return major cities in the country (default);
     *
     * {"type":"boolean"}
     */
    public function _need_all(boolean $_need_all) : GetCities
    {
        $this->params['_need_all'] = $_need_all;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of cities.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetCities
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of cities to return.
     *
     * {"type":"integer","minimum":0,"default":100,"maximum":1000}
     */
    public function _count(integer $_count) : GetCities
    {
        $this->params['_count'] = $_count;
        return $this;
    }
}