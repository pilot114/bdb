<?php

namespace Bdb\Addons\VK\Method;

/**
 * ; Returns a list of newsfeeds recommended to the current user.
 */
class GetRecommended
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Earliest timestamp (in Unix time) of a news item to return. By default, 24 hours ago.
     *
     * {"type":"integer","minimum":0}
     */
    public function _start_time(integer $_start_time) : GetRecommended
    {
        $this->params['_start_time'] = $_start_time;
        return $this;
    }
    /**
     * Latest timestamp (in Unix time) of a news item to return. By default, the current time.
     *
     * {"type":"integer","minimum":0}
     */
    public function _end_time(integer $_end_time) : GetRecommended
    {
        $this->params['_end_time'] = $_end_time;
        return $this;
    }
    /**
     * Maximum number of photos to return. By default, '5'.
     *
     * {"type":"integer","minimum":0,"default":5}
     */
    public function _max_photos(integer $_max_photos) : GetRecommended
    {
        $this->params['_max_photos'] = $_max_photos;
        return $this;
    }
    /**
     * 'new_from' value obtained in previous call.
     *
     * {"type":"string"}
     */
    public function _start_from(string $_start_from) : GetRecommended
    {
        $this->params['_start_from'] = $_start_from;
        return $this;
    }
    /**
     * Number of news items to return.
     *
     * {"type":"integer","minimum":0}
     */
    public function _count(integer $_count) : GetRecommended
    {
        $this->params['_count'] = $_count;
        return $this;
    }
    /**
     * Additional fields of [vk.com/dev/fields|profiles] and [vk.com/dev/fields_groups|communities] to return.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $_fields) : GetRecommended
    {
        $this->params['_fields'] = $_fields;
        return $this;
    }
}