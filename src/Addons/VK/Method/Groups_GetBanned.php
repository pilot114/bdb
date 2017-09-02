<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of users on a community blacklist.
 */
class Groups_GetBanned extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('groups.getBanned');
    }
    /**
     * Community ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : Groups_GetBanned
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of users.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $offset) : Groups_GetBanned
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of users to return.
     *
     * {"type":"integer","minimum":0,"default":20,"maximum":200}
     */
    public function _count(integer $count) : Groups_GetBanned
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Groups_GetBanned
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"integer","minimum":0}
     */
    public function _user_id(integer $user_id) : Groups_GetBanned
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}