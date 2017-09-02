<?php

namespace Bdb\Addons\VK\Method;

/**
 * Searches market items in a community's catalog
 */
class Market_Search extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('market.search');
    }
    /**
     * ID of an items owner community.
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : Market_Search
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Search query, for example "pink slippers".
     *
     * {"type":"string"}
     */
    public function _q(string $q) : Market_Search
    {
        $this->params['q'] = $q;
        return $this;
    }
    /**
     * Minimum item price value.
     *
     * {"type":"integer","minimum":0}
     */
    public function _price_from(integer $price_from) : Market_Search
    {
        $this->params['price_from'] = $price_from;
        return $this;
    }
    /**
     * Maximum item price value.
     *
     * {"type":"integer","minimum":0}
     */
    public function _price_to(integer $price_to) : Market_Search
    {
        $this->params['price_to'] = $price_to;
        return $this;
    }
    /**
     * Comma-separated tag IDs list.
     *
     * {"type":"array","items":{"type":"integer"}}
     */
    public function _tags(array $tags) : Market_Search
    {
        $this->params['tags'] = $tags;
        return $this;
    }
    /**
     * '0' — do not use reverse order, '1' — use reverse order
     *
     * {"type":"integer","minimum":0,"default":1,"enum":[0,1],"enumNames":["normal","reverse"]}
     */
    public function _rev(integer $rev) : Market_Search
    {
        $this->params['rev'] = $rev;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of results.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $offset) : Market_Search
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of items to return.
     *
     * {"type":"integer","minimum":0,"default":20,"maximum":200}
     */
    public function _count(integer $count) : Market_Search
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * '1' – to return additional fields: 'likes, can_comment, car_repost, photos'. By default: '0'.
     *
     * {"type":"boolean","default":0}
     */
    public function _extended(boolean $extended) : Market_Search
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}