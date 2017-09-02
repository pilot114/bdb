<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of users whom the current user has bookmarked.; ;
 */
class Fave_GetUsers extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('fave.getUsers');
    }
    /**
     * Offset needed to return a specific subset of users.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $offset) : Fave_GetUsers
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of users to return.
     *
     * {"type":"integer","minimum":0,"default":50}
     */
    public function _count(integer $count) : Fave_GetUsers
    {
        $this->params['count'] = $count;
        return $this;
    }
}