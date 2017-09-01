<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns communities and users that current user is suggested to follow.
 */
class GetSuggestedSources
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * offset required to choose a particular subset of communities or users.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetSuggestedSources
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * amount of communities or users to return.
     *
     * {"type":"integer","minimum":0,"maximum":1000,"default":20}
     */
    public function _count(integer $_count) : GetSuggestedSources
    {
        $this->params['_count'] = $_count;
        return $this;
    }
    /**
     * shuffle the returned list or not.
     *
     * {"type":"boolean"}
     */
    public function _shuffle(boolean $_shuffle) : GetSuggestedSources
    {
        $this->params['_shuffle'] = $_shuffle;
        return $this;
    }
    /**
     * list of extra fields to be returned. See available fields for [vk.com/dev/fields|users] and [vk.com/dev/fields_groups|communities].
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $_fields) : GetSuggestedSources
    {
        $this->params['_fields'] = $_fields;
        return $this;
    }
}