<?php

namespace Bdb\Addons\VK\Method;

/**
 * Denies sending message from community to the current user.
 */
class Messages_DenyMessagesFromGroup extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('messages.denyMessagesFromGroup');
    }
    /**
     * Group ID.
     *
     * {"type":"int","minimum":0}
     */
    public function group_id(int $group_id) : Messages_DenyMessagesFromGroup
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}