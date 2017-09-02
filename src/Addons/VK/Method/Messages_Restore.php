<?php

namespace Bdb\Addons\VK\Method;

/**
 * Restores a deleted message.
 */
class Messages_Restore extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('messages.restore');
    }
    /**
     * ID of a previously-deleted message to restore.
     *
     * {"type":"int","minimum":0}
     */
    public function message_id(int $message_id) : Messages_Restore
    {
        $this->params['message_id'] = $message_id;
        return $this;
    }
}