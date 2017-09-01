<?php

namespace Bdb\Addons\VK\Method;

/**
 * Allows the programmer to do a quick search for any substring.
 */
class GetHints
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
    public function _q(string $_q) : GetHints
    {
        $this->params['_q'] = $_q;
        return $this;
    }
    /**
     * Maximum number of results to return.
     *
     * {"type":"integer","minimum":0,"maximum":200,"default":9}
     */
    public function _limit(integer $_limit) : GetHints
    {
        $this->params['_limit'] = $_limit;
        return $this;
    }
    /**
     * 
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _filters(array $_filters) : GetHints
    {
        $this->params['_filters'] = $_filters;
        return $this;
    }
    /**
     * 
     *
     * {"type":"boolean","default":1}
     */
    public function _search_global(boolean $_search_global) : GetHints
    {
        $this->params['_search_global'] = $_search_global;
        return $this;
    }
}