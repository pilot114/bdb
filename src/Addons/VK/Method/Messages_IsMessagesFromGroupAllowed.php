<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns information whether sending messages from the community to current user is allowed.
 */
class Messages_IsMessagesFromGroupAllowed extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('messages.isMessagesFromGroupAllowed');
    }
    /**
     * Group ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : Messages_IsMessagesFromGroupAllowed
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * User ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function user_id(integer $user_id) : Messages_IsMessagesFromGroupAllowed
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}