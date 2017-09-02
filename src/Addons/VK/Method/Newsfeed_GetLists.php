<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of newsfeeds followed by the current user.
 */
class Newsfeed_GetLists extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('newsfeed.getLists');
    }
    /**
     * numeric list identifiers.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function _list_ids(array $list_ids) : Newsfeed_GetLists
    {
        $this->params['list_ids'] = $list_ids;
        return $this;
    }
}