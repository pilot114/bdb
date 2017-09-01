<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of posts on user walls in which the current user is mentioned.;
 */
class GetMentions
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Owner ID.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $_owner_id) : GetMentions
    {
        $this->params['_owner_id'] = $_owner_id;
        return $this;
    }
    /**
     * Earliest timestamp (in Unix time) of a post to return. By default, 24 hours ago.;
     *
     * {"type":"integer","minimum":0}
     */
    public function _start_time(integer $_start_time) : GetMentions
    {
        $this->params['_start_time'] = $_start_time;
        return $this;
    }
    /**
     * Latest timestamp (in Unix time) of a post to return. By default, the current time.;
     *
     * {"type":"integer","minimum":0}
     */
    public function _end_time(integer $_end_time) : GetMentions
    {
        $this->params['_end_time'] = $_end_time;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of posts.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetMentions
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of posts to return.
     *
     * {"type":"integer","minimum":0,"default":20,"maximum":50}
     */
    public function _count(integer $_count) : GetMentions
    {
        $this->params['_count'] = $_count;
        return $this;
    }
}