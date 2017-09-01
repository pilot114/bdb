<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of the current user's conversations that match search criteria.
 */
class SearchDialogs
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Search query string.
     *
     * {"type":"string"}
     */
    public function _q(string $_q) : SearchDialogs
    {
        $this->params['_q'] = $_q;
        return $this;
    }
    /**
     * Maximum number of results.
     *
     * {"type":"integer","minimum":0,"default":20}
     */
    public function _limit(integer $_limit) : SearchDialogs
    {
        $this->params['_limit'] = $_limit;
        return $this;
    }
    /**
     * Profile fields to return.;
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $_fields) : SearchDialogs
    {
        $this->params['_fields'] = $_fields;
        return $this;
    }
}