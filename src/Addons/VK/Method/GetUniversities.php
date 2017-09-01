<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of higher education institutions.
 */
class GetUniversities
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    /**
     * Search query.
     *
     * {"type":"string"}
     */
    public function _q(string $_q) : GetUniversities
    {
        $this->params['_q'] = $_q;
        return $this;
    }
    /**
     * Country ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _country_id(integer $_country_id) : GetUniversities
    {
        $this->params['_country_id'] = $_country_id;
        return $this;
    }
    /**
     * City ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _city_id(integer $_city_id) : GetUniversities
    {
        $this->params['_city_id'] = $_city_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of universities.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetUniversities
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of universities to return.
     *
     * {"type":"integer","minimum":0,"default":100,"maximum":10000}
     */
    public function _count(integer $_count) : GetUniversities
    {
        $this->params['_count'] = $_count;
        return $this;
    }
}