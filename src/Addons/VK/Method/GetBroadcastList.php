<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of the user's friends and communities that are broadcasting music in their statuses.
 */
class GetBroadcastList
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Types of objects to return:; 'friends' — only friends; 'groups' — only communities; 'all' — both friends and communities (default)
     *
     * {"type":"string","default":"all","enum":["friends","groups","all"]}
     */
    public function _filter(string $_filter) : GetBroadcastList
    {
        $this->params['_filter'] = $_filter;
        return $this;
    }
    /**
     * '1' — to return only friends and communities that are broadcasting at the moment.; '0' — to return all friends and communities (default).
     *
     * {"type":"boolean"}
     */
    public function _active(boolean $_active) : GetBroadcastList
    {
        $this->params['_active'] = $_active;
        return $this;
    }
}