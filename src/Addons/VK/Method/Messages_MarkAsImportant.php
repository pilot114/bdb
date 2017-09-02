<?php

namespace Bdb\Addons\VK\Method;

/**
 * Marks and unmarks messages as important (starred).
 */
class Messages_MarkAsImportant extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('messages.markAsImportant');
    }
    /**
     * IDs of messages to mark as important.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _message_ids(array $message_ids) : Messages_MarkAsImportant
    {
        $this->params['message_ids'] = $message_ids;
        return $this;
    }
    /**
     * '1' — to add a star (mark as important); '0' — to remove the star
     *
     * {"type":"int","minimum":0}
     */
    public function _important(int $important) : Messages_MarkAsImportant
    {
        $this->params['important'] = $important;
        return $this;
    }
}