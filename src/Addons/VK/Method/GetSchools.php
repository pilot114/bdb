<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of schools.
 */
class GetSchools
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
    public function _q(string $_q) : GetSchools
    {
        $this->params['_q'] = $_q;
        return $this;
    }
    /**
     * City ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function city_id(integer $city_id) : GetSchools
    {
        $this->params['city_id'] = $city_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of schools.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetSchools
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of schools to return.
     *
     * {"type":"integer","minimum":0,"default":100,"maximum":10000}
     */
    public function _count(integer $_count) : GetSchools
    {
        $this->params['_count'] = $_count;
        return $this;
    }
}