<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of regions.
 */
class GetRegions
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    /**
     * Country ID, received in [vk.com/dev/database.getCountries|database.getCountries] method.
     *
     * {"type":"integer","minimum":0}
     */
    public function country_id(integer $country_id) : GetRegions
    {
        $this->params['country_id'] = $country_id;
        return $this;
    }
    /**
     * Search query.
     *
     * {"type":"string"}
     */
    public function _q(string $_q) : GetRegions
    {
        $this->params['_q'] = $_q;
        return $this;
    }
    /**
     * Offset needed to return specific subset of regions.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetRegions
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of regions to return.
     *
     * {"type":"integer","minimum":0,"default":100,"maximum":1000}
     */
    public function _count(integer $_count) : GetRegions
    {
        $this->params['_count'] = $_count;
        return $this;
    }
}