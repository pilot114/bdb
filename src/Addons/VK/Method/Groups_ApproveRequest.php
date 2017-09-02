<?php

namespace Bdb\Addons\VK\Method;

/**
 * Allows to approve join request to the community.
 */
class Groups_ApproveRequest extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('groups.approveRequest');
    }
    /**
     * Community ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : Groups_ApproveRequest
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * User ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function user_id(integer $user_id) : Groups_ApproveRequest
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}