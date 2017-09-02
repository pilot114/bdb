<?php

namespace Bdb\Addons\VK\Method;

/**
 * Deletes a note of the current user.
 */
class Notes_Delete extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('notes.delete');
    }
    /**
     * Note ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function note_id(integer $note_id) : Notes_Delete
    {
        $this->params['note_id'] = $note_id;
        return $this;
    }
}