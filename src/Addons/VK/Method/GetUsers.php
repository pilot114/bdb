<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of users whom the current user has bookmarked.; ;
 */
class GetUsers
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Offset needed to return a specific subset of users.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetUsers
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of users to return.
     *
     * {"type":"integer","minimum":0,"default":50}
     */
    public function _count(integer $_count) : GetUsers
    {
        $this->params['_count'] = $_count;
        return $this;
    }
}