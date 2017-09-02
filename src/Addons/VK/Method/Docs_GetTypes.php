<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns documents types available for current user.
 */
class Docs_GetTypes extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('docs.getTypes');
    }
    /**
     * ID of the user or community that owns the documents. Use a negative value to designate a community ID.
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : Docs_GetTypes
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
}