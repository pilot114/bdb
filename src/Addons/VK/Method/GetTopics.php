<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of topics on a community's discussion board.
 */
class GetTopics
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    /**
     * ID of the community that owns the discussion board.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : GetTopics
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * IDs of topics to be returned (100 maximum). By default, all topics are returned.; If this parameter is set, the 'order', 'offset', and 'count' parameters are ignored.
     *
     * {"type":"array","maxItems":100,"items":{"type":"integer"}}
     */
    public function _topic_ids(array $_topic_ids) : GetTopics
    {
        $this->params['_topic_ids'] = $_topic_ids;
        return $this;
    }
    /**
     * Sort order:; '1' — by date updated in reverse chronological order.; '2' — by date created in reverse chronological order.; '-1' — by date updated in chronological order.; '-2' — by date created in chronological order.; ; If no sort order is specified, topics are returned in the order specified by the group administrator. Pinned topics are returned first, regardless of the sorting.
     *
     * {"type":"integer","default":0,"enum":[1,2,-1,-2,0],"enumNames":["updated desc","created desc","updated asc","created asc","as by administrator"]}
     */
    public function _order(integer $_order) : GetTopics
    {
        $this->params['_order'] = $_order;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of topics.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetTopics
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of topics to return.
     *
     * {"type":"integer","minimum":0,"default":40,"maximum":100}
     */
    public function _count(integer $_count) : GetTopics
    {
        $this->params['_count'] = $_count;
        return $this;
    }
    /**
     * '1' — to return information about users who created topics or who posted there last; '0' — to return no additional fields (default)
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $_extended) : GetTopics
    {
        $this->params['_extended'] = $_extended;
        return $this;
    }
    /**
     * '1' — to return the first comment in each topic;; '2' — to return the last comment in each topic;; '0' — to return no comments.; ; By default: '0'.
     *
     * {"type":"integer","default":0,"enum":[1,2,0],"enumNames":["first","last","none"]}
     */
    public function _preview(integer $_preview) : GetTopics
    {
        $this->params['_preview'] = $_preview;
        return $this;
    }
    /**
     * Number of characters after which to truncate the previewed comment. To preview the full comment, specify '0'.
     *
     * {"type":"integer","minimum":0,"default":90}
     */
    public function _preview_length(integer $_preview_length) : GetTopics
    {
        $this->params['_preview_length'] = $_preview_length;
        return $this;
    }
}