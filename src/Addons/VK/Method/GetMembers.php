<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of community members.
 */
class GetMembers
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    /**
     * ID or screen name of the community.
     *
     * {"type":"string"}
     */
    public function _group_id(string $_group_id) : GetMembers
    {
        $this->params['_group_id'] = $_group_id;
        return $this;
    }
    /**
     * Sort order. Available values: 'id_asc', 'id_desc', 'time_asc', 'time_desc'.; 'time_asc' and 'time_desc' are availavle only if the method is called by the group's 'moderator'.
     *
     * {"type":"string","default":"id_asc","enum":["id_asc","id_desc","time_asc","time_desc"]}
     */
    public function _sort(string $_sort) : GetMembers
    {
        $this->params['_sort'] = $_sort;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of community members.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetMembers
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of community members to return.
     *
     * {"type":"integer","minimum":0,"default":1000,"maximum":1000}
     */
    public function _count(integer $_count) : GetMembers
    {
        $this->params['_count'] = $_count;
        return $this;
    }
    /**
     * List of additional fields to be returned. ; Available values: 'sex, bdate, city, country, photo_50, photo_100, photo_200_orig, photo_200, photo_400_orig, photo_max, photo_max_orig, online, online_mobile, lists, domain, has_mobile, contacts, connections, site, education, universities, schools, can_post, can_see_all_posts, can_see_audio, can_write_private_message, status, last_seen, common_count, relation, relatives, counters'.
     *
     * {"type":"array","items":{"type":"string","enum":["sex","bdate","city","country","photo_50","photo_100","photo_200_orig","photo_200","photo_400_orig","photo_max","photo_max_orig","online","online_mobile","lists","domain","has_mobile","contacts","connections","site","education","universities","schools","can_post","can_see_all_posts","can_see_audio","can_write_private_message","status","last_seen","common_count","relation","relatives","counters"]}}
     */
    public function _fields(array $_fields) : GetMembers
    {
        $this->params['_fields'] = $_fields;
        return $this;
    }
    /**
     * *'friends' – only friends in this community will be returned;; *'unsure' – only those who pressed 'I may attend' will be returned (if it's an event).
     *
     * {"type":"string","enum":["friends","unsure"]}
     */
    public function _filter(string $_filter) : GetMembers
    {
        $this->params['_filter'] = $_filter;
        return $this;
    }
}