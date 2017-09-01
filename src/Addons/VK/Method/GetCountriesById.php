<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns information about countries by their IDs.
 */
class GetCountriesById
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    /**
     * Country IDs.
     *
     * {"type":"array","items":{"type":"integer","minimum":0},"maxItems":1000}
     */
    public function _country_ids(array $_country_ids) : GetCountriesById
    {
        $this->params['_country_ids'] = $_country_ids;
        return $this;
    }
}