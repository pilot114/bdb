<?php

namespace Bdb\Addons\VK\Method;

/**
 * Allows sending messages from community to the current user.
 */
class Messages_AllowMessagesFromGroup extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('messages.allowMessagesFromGroup');
    }
    /**
     * Group ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : Messages_AllowMessagesFromGroup
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}