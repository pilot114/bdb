<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of comments in the current user's newsfeed.
 */
class Newsfeed_GetComments extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('newsfeed.getComments');
    }
    /**
     * Number of comments to return. For auto feed, you can use the 'new_offset' parameter returned by this method.
     *
     * {"type":"int","minimum":0,"default":30,"maximum":100}
     */
    public function _count(int $count) : Newsfeed_GetComments
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Filters to apply:; 'post' — new comments on wall posts; 'photo' — new comments on photos; 'video' — new comments on videos; 'topic' — new comments on discussions; 'note' — new comments on notes;
     *
     * {"type":"array","items":{"type":"string","enum":["post","photo","video","topic","note"]}}
     */
    public function _filters(array $filters) : Newsfeed_GetComments
    {
        $this->params['filters'] = $filters;
        return $this;
    }
    /**
     * Object ID, comments on repost of which shall be returned, e.g. 'wall1_45486'. (If the parameter is set, the 'filters' parameter is optional.);
     *
     * {"type":"string"}
     */
    public function _reposts(string $reposts) : Newsfeed_GetComments
    {
        $this->params['reposts'] = $reposts;
        return $this;
    }
    /**
     * Earliest timestamp (in Unix time) of a comment to return. By default, 24 hours ago.
     *
     * {"type":"int","minimum":0}
     */
    public function _start_time(int $start_time) : Newsfeed_GetComments
    {
        $this->params['start_time'] = $start_time;
        return $this;
    }
    /**
     * Latest timestamp (in Unix time) of a comment to return. By default, the current time.
     *
     * {"type":"int","minimum":0}
     */
    public function _end_time(int $end_time) : Newsfeed_GetComments
    {
        $this->params['end_time'] = $end_time;
        return $this;
    }
    /**
     * Identificator needed to return the next page with results. Value for this parameter returns in 'next_from' field.
     *
     * {"type":"string"}
     */
    public function _start_from(string $start_from) : Newsfeed_GetComments
    {
        $this->params['start_from'] = $start_from;
        return $this;
    }
    /**
     * Additional fields of [vk.com/dev/fields|profiles] and [vk.com/dev/fields_groups|communities] to return.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Newsfeed_GetComments
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}