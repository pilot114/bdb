<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns the server address for document upload.
 */
class Docs_GetUploadServer extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('docs.getUploadServer');
    }
    /**
     * Community ID (if the document will be uploaded to the community).
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Docs_GetUploadServer
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}