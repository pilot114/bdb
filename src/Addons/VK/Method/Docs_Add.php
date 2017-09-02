<?php

namespace Bdb\Addons\VK\Method;

/**
 * Copies a document to a user's or community's document list.
 */
class Docs_Add extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('docs.add');
    }
    /**
     * ID of the user or community that owns the document. Use a negative value to designate a community ID.
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : Docs_Add
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Document ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function doc_id(integer $doc_id) : Docs_Add
    {
        $this->params['doc_id'] = $doc_id;
        return $this;
    }
    /**
     * Access key. This parameter is required if 'access_key' was returned with the document's data.
     *
     * {"type":"string"}
     */
    public function _access_key(string $access_key) : Docs_Add
    {
        $this->params['access_key'] = $access_key;
        return $this;
    }
}