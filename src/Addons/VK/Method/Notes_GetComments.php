<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of comments on a note.
 */
class Notes_GetComments extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('notes.getComments');
    }
    /**
     * Note ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function note_id(integer $note_id) : Notes_GetComments
    {
        $this->params['note_id'] = $note_id;
        return $this;
    }
    /**
     * Note owner ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _owner_id(integer $owner_id) : Notes_GetComments
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Number of comments to return.
     *
     * {"type":"integer","minimum":0,"default":20,"maximum":100}
     */
    public function _count(integer $count) : Notes_GetComments
    {
        $this->params['count'] = $count;
        return $this;
    }
}