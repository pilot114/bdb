<?php

namespace Bdb\Addons\VK\Method;

/**
 * Prevents news from specified users and communities from appearing in the current user's newsfeed.
 */
class Newsfeed_AddBan extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('newsfeed.addBan');
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"integer"}}
     */
    public function _user_ids(array $user_ids) : Newsfeed_AddBan
    {
        $this->params['user_ids'] = $user_ids;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"integer"}}
     */
    public function _group_ids(array $group_ids) : Newsfeed_AddBan
    {
        $this->params['group_ids'] = $group_ids;
        return $this;
    }
}