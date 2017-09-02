<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of documents matching the search criteria.
 */
class Docs_Search extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('docs.search');
    }
    /**
     * Search query string.
     *
     * {"type":"string","maxLength":512}
     */
    public function q(string $q) : Docs_Search
    {
        $this->params['q'] = $q;
        return $this;
    }
    /**
     * Number of results to return.
     *
     * {"type":"int","minimum":0}
     */
    public function _count(int $count) : Docs_Search
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of results.
     *
     * {"type":"int","minimum":0}
     */
    public function _offset(int $offset) : Docs_Search
    {
        $this->params['offset'] = $offset;
        return $this;
    }
}