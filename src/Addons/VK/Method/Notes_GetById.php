<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a note by its ID.
 */
class Notes_GetById extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('notes.getById');
    }
    /**
     * Note ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function note_id(integer $note_id) : Notes_GetById
    {
        $this->params['note_id'] = $note_id;
        return $this;
    }
    /**
     * Note owner ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _owner_id(integer $owner_id) : Notes_GetById
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
}