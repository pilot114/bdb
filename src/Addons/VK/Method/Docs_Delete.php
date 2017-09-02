<?php

namespace Bdb\Addons\VK\Method;

/**
 * Deletes a user or community document.
 */
class Docs_Delete extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('docs.delete');
    }
    /**
     * ID of the user or community that owns the document. Use a negative value to designate a community ID.
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : Docs_Delete
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Document ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function doc_id(integer $doc_id) : Docs_Delete
    {
        $this->params['doc_id'] = $doc_id;
        return $this;
    }
}