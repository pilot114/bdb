<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of requests to the community.
 */
class Groups_GetRequests extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('groups.getRequests');
    }
    /**
     * Community ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : Groups_GetRequests
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of results.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $offset) : Groups_GetRequests
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of results to return.
     *
     * {"type":"integer","minimum":0,"default":20,"maximum":200}
     */
    public function _count(integer $count) : Groups_GetRequests
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Profile fields to return.;
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Groups_GetRequests
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}