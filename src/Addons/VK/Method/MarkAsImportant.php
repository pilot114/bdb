<?php

namespace Bdb\Addons\VK\Method;

/**
 * Marks and unmarks messages as important (starred).
 */
class MarkAsImportant
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * IDs of messages to mark as important.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _message_ids(array $_message_ids) : MarkAsImportant
    {
        $this->params['_message_ids'] = $_message_ids;
        return $this;
    }
    /**
     * '1' — to add a star (mark as important); '0' — to remove the star
     *
     * {"type":"integer","minimum":0}
     */
    public function _important(integer $_important) : MarkAsImportant
    {
        $this->params['_important'] = $_important;
        return $this;
    }
}