<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of notifications about other users' feedback to the current user's wall posts.
 */
class Notifications_Get extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('notifications.get');
    }
    /**
     * Number of notifications to return.
     *
     * {"type":"integer","minimum":0,"default":30,"maximum":100}
     */
    public function _count(integer $count) : Notifications_Get
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function _start_from(string $start_from) : Notifications_Get
    {
        $this->params['start_from'] = $start_from;
        return $this;
    }
    /**
     * Type of notifications to return:; 'wall' — wall posts; 'mentions' — mentions in wall posts, comments, or topics; 'comments' — comments to wall posts, photos, and videos; 'likes' — likes; 'reposted' — wall posts that are copied from the current user's wall; 'followers' — new followers; 'friends' — accepted friend requests
     *
     * {"type":"array","items":{"type":"string","enum":["wall","mentions","comments","likes","reposted","followers","friends"]}}
     */
    public function _filters(array $filters) : Notifications_Get
    {
        $this->params['filters'] = $filters;
        return $this;
    }
    /**
     * Earliest timestamp (in Unix time) of a notification to return. By default, 24 hours ago.
     *
     * {"type":"integer"}
     */
    public function _start_time(integer $start_time) : Notifications_Get
    {
        $this->params['start_time'] = $start_time;
        return $this;
    }
    /**
     * Latest timestamp (in Unix time) of a notification to return. By default, the current time.
     *
     * {"type":"integer"}
     */
    public function _end_time(integer $end_time) : Notifications_Get
    {
        $this->params['end_time'] = $end_time;
        return $this;
    }
}