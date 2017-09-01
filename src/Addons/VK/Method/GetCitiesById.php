<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns information about cities by their IDs.
 */
class GetCitiesById
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    /**
     * City IDs.
     *
     * {"type":"array","items":{"type":"integer","minimum":0},"maxItems":1000}
     */
    public function _city_ids(array $_city_ids) : GetCitiesById
    {
        $this->params['_city_ids'] = $_city_ids;
        return $this;
    }
}