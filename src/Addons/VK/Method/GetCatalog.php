<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of applications (apps) available to users in the App Catalog.
 */
class GetCatalog
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    /**
     * Sort order:; 'popular_today' — popular for one day (default); 'visitors' — by visitors number ; 'create_date' — by creation date; 'growth_rate' — by growth rate; 'popular_week' — popular for one week
     *
     * {"type":"string","default":"popular_today","enum":["popular_today","visitors","create_date","growth_rate","popular_week"]}
     */
    public function _sort(string $_sort) : GetCatalog
    {
        $this->params['_sort'] = $_sort;
        return $this;
    }
    /**
     * Offset required to return a specific subset of apps.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetCatalog
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of apps to return.
     *
     * {"type":"integer","minimum":0,"default":100}
     */
    public function count(integer $count) : GetCatalog
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function _platform(string $_platform) : GetCatalog
    {
        $this->params['_platform'] = $_platform;
        return $this;
    }
    /**
     * '1' — to return additional fields 'screenshots', 'MAU', 'catalog_position', and 'international'. If set, 'count' must be less than or equal to '100'. ; '0' — not to return additional fields (default).
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $_extended) : GetCatalog
    {
        $this->params['_extended'] = $_extended;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"boolean"}
     */
    public function _return_friends(boolean $_return_friends) : GetCatalog
    {
        $this->params['_return_friends'] = $_return_friends;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $_fields) : GetCatalog
    {
        $this->params['_fields'] = $_fields;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function _name_case(string $_name_case) : GetCatalog
    {
        $this->params['_name_case'] = $_name_case;
        return $this;
    }
    /**
     * Search query string.
     *
     * {"type":"string"}
     */
    public function _q(string $_q) : GetCatalog
    {
        $this->params['_q'] = $_q;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"integer","minimum":0}
     */
    public function _genre_id(integer $_genre_id) : GetCatalog
    {
        $this->params['_genre_id'] = $_genre_id;
        return $this;
    }
    /**
     * 'installed' — to return list of installed apps (only for mobile platform).
     *
     * {"type":"string"}
     */
    public function _filter(string $_filter) : GetCatalog
    {
        $this->params['_filter'] = $_filter;
        return $this;
    }
}