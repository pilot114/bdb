<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of the current user's conversations that match search criteria.
 */
class Messages_SearchDialogs extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('messages.searchDialogs');
    }
    /**
     * Search query string.
     *
     * {"type":"string"}
     */
    public function _q(string $q) : Messages_SearchDialogs
    {
        $this->params['q'] = $q;
        return $this;
    }
    /**
     * Maximum number of results.
     *
     * {"type":"integer","minimum":0,"default":20}
     */
    public function _limit(integer $limit) : Messages_SearchDialogs
    {
        $this->params['limit'] = $limit;
        return $this;
    }
    /**
     * Profile fields to return.;
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Messages_SearchDialogs
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}