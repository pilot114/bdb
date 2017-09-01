<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns non-null values of user counters.
 */
class GetCounters
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Counters to be returned.
     *
     * {"type":"array","items":{"type":"string","enum":["friends","messages","photos","videos","notes","gifts","events","groups","sdk","friends_suggestions"]}}
     */
    public function _filter(array $_filter) : GetCounters
    {
        $this->params['_filter'] = $_filter;
        return $this;
    }
}