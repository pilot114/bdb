<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of the user's friends and communities that are broadcasting music in their statuses.
 */
class Audio_GetBroadcastList extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('audio.getBroadcastList');
    }
    /**
     * Types of objects to return:; 'friends' — only friends; 'groups' — only communities; 'all' — both friends and communities (default)
     *
     * {"type":"string","default":"all","enum":["friends","groups","all"]}
     */
    public function _filter(string $filter) : Audio_GetBroadcastList
    {
        $this->params['filter'] = $filter;
        return $this;
    }
    /**
     * '1' — to return only friends and communities that are broadcasting at the moment.; '0' — to return all friends and communities (default).
     *
     * {"type":"boolean"}
     */
    public function _active(boolean $active) : Audio_GetBroadcastList
    {
        $this->params['active'] = $active;
        return $this;
    }
}