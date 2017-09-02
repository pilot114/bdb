<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns messages by their IDs.
 */
class Messages_GetById extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('messages.getById');
    }
    /**
     * Message IDs.
     *
     * {"type":"array","items":{"type":"integer","minimum":0},"maxItems":100}
     */
    public function message_ids(array $message_ids) : Messages_GetById
    {
        $this->params['message_ids'] = $message_ids;
        return $this;
    }
}