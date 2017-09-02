<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of notes created by a user.
 */
class Notes_Get extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('notes.get');
    }
    /**
     * Note IDs.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _note_ids(array $note_ids) : Notes_Get
    {
        $this->params['note_ids'] = $note_ids;
        return $this;
    }
    /**
     * Note owner ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _user_id(integer $user_id) : Notes_Get
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Number of notes to return.
     *
     * {"type":"integer","minimum":0,"default":20,"maximum":100}
     */
    public function _count(integer $count) : Notes_Get
    {
        $this->params['count'] = $count;
        return $this;
    }
}