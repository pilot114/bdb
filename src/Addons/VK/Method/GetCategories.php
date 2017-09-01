<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of market categories.
 */
class GetCategories
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Number of results to return.
     *
     * {"type":"integer","minimum":0,"maximum":1000,"default":10}
     */
    public function _count(integer $_count) : GetCategories
    {
        $this->params['_count'] = $_count;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of results.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetCategories
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
}