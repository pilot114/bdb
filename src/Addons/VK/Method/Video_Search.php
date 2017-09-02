<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of videos under the set search criterion.
 */
class Video_Search extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('video.search');
    }
    /**
     * Search query string (e.g., 'The Beatles').
     *
     * {"type":"string"}
     */
    public function q(string $q) : Video_Search
    {
        $this->params['q'] = $q;
        return $this;
    }
    /**
     * Sort order:; '1' — by duration; '2' — by relevance; '0' — by date added
     *
     * {"type":"integer","enum":[1,2,0],"enumNames":["duration","relevance","date added"]}
     */
    public function _sort(integer $sort) : Video_Search
    {
        $this->params['sort'] = $sort;
        return $this;
    }
    /**
     * If not null, only searches for high-definition videos.
     *
     * {"type":"integer"}
     */
    public function _hd(integer $hd) : Video_Search
    {
        $this->params['hd'] = $hd;
        return $this;
    }
    /**
     * '1' — to disable the Safe Search filter; '0' — to enable the Safe Search filter
     *
     * {"type":"boolean"}
     */
    public function _adult(boolean $adult) : Video_Search
    {
        $this->params['adult'] = $adult;
        return $this;
    }
    /**
     * Filters to apply:; 'youtube' — return YouTube videos only; 'vimeo' — return Vimeo videos only; 'short' — return short videos only; 'long' — return long videos only
     *
     * {"type":"array","items":{"type":"string","enum":["youtube","vimeo","short","long"]}}
     */
    public function _filters(array $filters) : Video_Search
    {
        $this->params['filters'] = $filters;
        return $this;
    }
    /**
     * 
     *
     * {"type":"boolean"}
     */
    public function _search_own(boolean $search_own) : Video_Search
    {
        $this->params['search_own'] = $search_own;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of videos.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $offset) : Video_Search
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"integer","minimum":0}
     */
    public function _longer(integer $longer) : Video_Search
    {
        $this->params['longer'] = $longer;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"integer","minimum":0}
     */
    public function _shorter(integer $shorter) : Video_Search
    {
        $this->params['shorter'] = $shorter;
        return $this;
    }
    /**
     * Number of videos to return.
     *
     * {"type":"integer","minimum":0,"default":20,"maximum":200}
     */
    public function _count(integer $count) : Video_Search
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * 
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $extended) : Video_Search
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}