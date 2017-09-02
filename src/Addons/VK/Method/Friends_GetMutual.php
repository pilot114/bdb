<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of user IDs of the mutual friends of two users.
 */
class Friends_GetMutual extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('friends.getMutual');
    }
    /**
     * ID of the user whose friends will be checked against the friends of the user specified in 'target_uid'.
     *
     * {"type":"integer","minimum":0}
     */
    public function _source_uid(integer $source_uid) : Friends_GetMutual
    {
        $this->params['source_uid'] = $source_uid;
        return $this;
    }
    /**
     * ID of the user whose friends will be checked against the friends of the user specified in 'source_uid'.
     *
     * {"type":"integer","minimum":0}
     */
    public function _target_uid(integer $target_uid) : Friends_GetMutual
    {
        $this->params['target_uid'] = $target_uid;
        return $this;
    }
    /**
     * IDs of the users whose friends will be checked against the friends of the user specified in 'source_uid'.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _target_uids(array $target_uids) : Friends_GetMutual
    {
        $this->params['target_uids'] = $target_uids;
        return $this;
    }
    /**
     * Sort order:; 'random' — random order
     *
     * {"type":"string"}
     */
    public function _order(string $order) : Friends_GetMutual
    {
        $this->params['order'] = $order;
        return $this;
    }
    /**
     * Number of mutual friends to return.
     *
     * {"type":"integer","minimum":0}
     */
    public function _count(integer $count) : Friends_GetMutual
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of mutual friends.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $offset) : Friends_GetMutual
    {
        $this->params['offset'] = $offset;
        return $this;
    }
}