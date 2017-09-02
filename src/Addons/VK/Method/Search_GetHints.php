<?php

namespace Bdb\Addons\VK\Method;

/**
 * Allows the programmer to do a quick search for any substring.
 */
class Search_GetHints extends \Bdb\Addons\VK\BaseMethod
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    public function __construct($client, $defaultQuery)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('search.getHints');
    }
    /**
     * Search query string.
     *
     * {"type":"string"}
     */
    public function _q(string $q) : Search_GetHints
    {
        $this->params['q'] = $q;
        return $this;
    }
    /**
     * Maximum number of results to return.
     *
     * {"type":"integer","minimum":0,"maximum":200,"default":9}
     */
    public function _limit(integer $limit) : Search_GetHints
    {
        $this->params['limit'] = $limit;
        return $this;
    }
    /**
     * 
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _filters(array $filters) : Search_GetHints
    {
        $this->params['filters'] = $filters;
        return $this;
    }
    /**
     * 
     *
     * {"type":"boolean","default":1}
     */
    public function _search_global(boolean $search_global) : Search_GetHints
    {
        $this->params['search_global'] = $search_global;
        return $this;
    }
}