<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of user IDs of the mutual friends of two users.
 */
class GetMutual
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of the user whose friends will be checked against the friends of the user specified in 'target_uid'.
     *
     * {"type":"integer","minimum":0}
     */
    public function _source_uid(integer $_source_uid) : GetMutual
    {
        $this->params['_source_uid'] = $_source_uid;
        return $this;
    }
    /**
     * ID of the user whose friends will be checked against the friends of the user specified in 'source_uid'.
     *
     * {"type":"integer","minimum":0}
     */
    public function _target_uid(integer $_target_uid) : GetMutual
    {
        $this->params['_target_uid'] = $_target_uid;
        return $this;
    }
    /**
     * IDs of the users whose friends will be checked against the friends of the user specified in 'source_uid'.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _target_uids(array $_target_uids) : GetMutual
    {
        $this->params['_target_uids'] = $_target_uids;
        return $this;
    }
    /**
     * Sort order:; 'random' — random order
     *
     * {"type":"string"}
     */
    public function _order(string $_order) : GetMutual
    {
        $this->params['_order'] = $_order;
        return $this;
    }
    /**
     * Number of mutual friends to return.
     *
     * {"type":"integer","minimum":0}
     */
    public function _count(integer $_count) : GetMutual
    {
        $this->params['_count'] = $_count;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of mutual friends.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetMutual
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
}