<?php

namespace Bdb\Addons\VK\Method;

/**
 * Deletes one or more messages.
 */
class Messages_Delete extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('messages.delete');
    }
    /**
     * Message IDs.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _message_ids(array $message_ids) : Messages_Delete
    {
        $this->params['message_ids'] = $message_ids;
        return $this;
    }
    /**
     * '1' — to mark message as spam.
     *
     * {"type":"boolean"}
     */
    public function _spam(boolean $spam) : Messages_Delete
    {
        $this->params['spam'] = $spam;
        return $this;
    }
}