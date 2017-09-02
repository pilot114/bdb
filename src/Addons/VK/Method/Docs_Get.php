<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns detailed information about user or community documents.
 */
class Docs_Get extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('docs.get');
    }
    /**
     * Number of documents to return. By default, all documents.
     *
     * {"type":"integer","minimum":0}
     */
    public function _count(integer $count) : Docs_Get
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of documents.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $offset) : Docs_Get
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * ID of the user or community that owns the documents. Use a negative value to designate a community ID.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $owner_id) : Docs_Get
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
}