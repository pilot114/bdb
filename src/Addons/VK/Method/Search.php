<?php

namespace Bdb\Addons\VK\Method;

/**
 * Searches market items in a community's catalog
 */
class Search
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of an items owner community.
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : Search
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Search query, for example "pink slippers".
     *
     * {"type":"string"}
     */
    public function _q(string $_q) : Search
    {
        $this->params['_q'] = $_q;
        return $this;
    }
    /**
     * Minimum item price value.
     *
     * {"type":"integer","minimum":0}
     */
    public function _price_from(integer $_price_from) : Search
    {
        $this->params['_price_from'] = $_price_from;
        return $this;
    }
    /**
     * Maximum item price value.
     *
     * {"type":"integer","minimum":0}
     */
    public function _price_to(integer $_price_to) : Search
    {
        $this->params['_price_to'] = $_price_to;
        return $this;
    }
    /**
     * Comma-separated tag IDs list.
     *
     * {"type":"array","items":{"type":"integer"}}
     */
    public function _tags(array $_tags) : Search
    {
        $this->params['_tags'] = $_tags;
        return $this;
    }
    /**
     * '0' — do not use reverse order, '1' — use reverse order
     *
     * {"type":"integer","minimum":0,"default":1,"enum":[0,1],"enumNames":["normal","reverse"]}
     */
    public function _rev(integer $_rev) : Search
    {
        $this->params['_rev'] = $_rev;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of results.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : Search
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of items to return.
     *
     * {"type":"integer","minimum":0,"default":20,"maximum":200}
     */
    public function _count(integer $_count) : Search
    {
        $this->params['_count'] = $_count;
        return $this;
    }
    /**
     * '1' – to return additional fields: 'likes, can_comment, car_repost, photos'. By default: '0'.
     *
     * {"type":"boolean","default":0}
     */
    public function _extended(boolean $_extended) : Search
    {
        $this->params['_extended'] = $_extended;
        return $this;
    }
}