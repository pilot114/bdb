<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns information about streets by their IDs.
 */
class GetStreetsById
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    /**
     * Street IDs.
     *
     * {"type":"array","items":{"type":"integer","minimum":0},"maxItems":1000}
     */
    public function street_ids(array $street_ids) : GetStreetsById
    {
        $this->params['street_ids'] = $street_ids;
        return $this;
    }
}