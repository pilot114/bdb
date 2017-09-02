<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns data required to show newsfeed for the current user.
 */
class Newsfeed_Get extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('newsfeed.get');
    }
    /**
     * Filters to apply:; 'post' — new wall posts; 'photo' — new photos; 'photo_tag' — new photo tags; 'wall_photo' — new wall photos; 'friend' — new friends; 'note' — new notes
     *
     * {"type":"array","items":{"type":"string","enum":["post","photo","photo_tag","wall_photo","friend","note"]}}
     */
    public function _filters(array $filters) : Newsfeed_Get
    {
        $this->params['filters'] = $filters;
        return $this;
    }
    /**
     * '1' — to return news items from banned sources
     *
     * {"type":"boolean"}
     */
    public function _return_banned(boolean $return_banned) : Newsfeed_Get
    {
        $this->params['return_banned'] = $return_banned;
        return $this;
    }
    /**
     * Earliest timestamp (in Unix time) of a news item to return. By default, 24 hours ago.
     *
     * {"type":"int","minimum":0}
     */
    public function _start_time(int $start_time) : Newsfeed_Get
    {
        $this->params['start_time'] = $start_time;
        return $this;
    }
    /**
     * Latest timestamp (in Unix time) of a news item to return. By default, the current time.
     *
     * {"type":"int","minimum":0}
     */
    public function _end_time(int $end_time) : Newsfeed_Get
    {
        $this->params['end_time'] = $end_time;
        return $this;
    }
    /**
     * Maximum number of photos to return. By default, '5'.
     *
     * {"type":"int","minimum":0,"default":5}
     */
    public function _max_photos(int $max_photos) : Newsfeed_Get
    {
        $this->params['max_photos'] = $max_photos;
        return $this;
    }
    /**
     * Sources to obtain news from, separated by commas.; ; User IDs can be specified in formats '' or 'u' ; where '' is the user's friend ID.; ; Community IDs can be specified in formats '-' or 'g' ; where '' is the community ID.; ; If the parameter is not set, all of the user's friends and communities are returned, except for banned sources, which can be obtained with the [vk.com/dev/newsfeed.getBanned|newsfeed.getBanned] method.;
     *
     * {"type":"string"}
     */
    public function _source_ids(string $source_ids) : Newsfeed_Get
    {
        $this->params['source_ids'] = $source_ids;
        return $this;
    }
    /**
     * identifier required to get the next page of results. ; Value for this parameter is returned in 'next_from' field in a reply.
     *
     * {"type":"string"}
     */
    public function _start_from(string $start_from) : Newsfeed_Get
    {
        $this->params['start_from'] = $start_from;
        return $this;
    }
    /**
     * Number of news items to return (default 50; maximum 100). For auto feed, you can use the 'new_offset' parameter returned by this method.
     *
     * {"type":"int","minimum":0,"maximum":100,"default":50}
     */
    public function _count(int $count) : Newsfeed_Get
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Additional fields of [vk.com/dev/fields|profiles] and [vk.com/dev/fields_groups|communities] to return.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Newsfeed_Get
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}