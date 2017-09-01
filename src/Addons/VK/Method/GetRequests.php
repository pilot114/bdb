<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of requests to the community.
 */
class GetRequests
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Community ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : GetRequests
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of results.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetRequests
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of results to return.
     *
     * {"type":"integer","minimum":0,"default":20,"maximum":200}
     */
    public function _count(integer $_count) : GetRequests
    {
        $this->params['_count'] = $_count;
        return $this;
    }
    /**
     * Profile fields to return.;
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $_fields) : GetRequests
    {
        $this->params['_fields'] = $_fields;
        return $this;
    }
}