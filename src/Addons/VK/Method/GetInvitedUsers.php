<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns invited users list of a community
 */
class GetInvitedUsers
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Group ID to return invited users for.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : GetInvitedUsers
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of results.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetInvitedUsers
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of results to return.
     *
     * {"type":"integer","minimum":0,"default":20}
     */
    public function _count(integer $_count) : GetInvitedUsers
    {
        $this->params['_count'] = $_count;
        return $this;
    }
    /**
     * List of additional fields to be returned. ; Available values: 'sex, bdate, city, country, photo_50, photo_100, photo_200_orig, photo_200, photo_400_orig, photo_max, photo_max_orig, online, online_mobile, lists, domain, has_mobile, contacts, connections, site, education, universities, schools, can_post, can_see_all_posts, can_see_audio, can_write_private_message, status, last_seen, common_count, relation, relatives, counters'.
     *
     * {"type":"array","items":{"type":"string","enum":["sex","bdate","city","country","photo_50","photo_100","photo_200_orig","photo_200","photo_400_orig","photo_max","photo_max_orig","online","online_mobile","lists","domain","has_mobile","contacts","connections","site","education","universities","schools","can_post","can_see_all_posts","can_see_audio","can_write_private_message","status","last_seen","common_count","relation","relatives","counters"]}}
     */
    public function _fields(array $_fields) : GetInvitedUsers
    {
        $this->params['_fields'] = $_fields;
        return $this;
    }
    /**
     * Case for declension of user name and surname. Possible values:; *'nom' — nominative (default);; *'gen' — genitive;; *'dat' — dative;; *'acc' — accusative; ; *'ins' — instrumental;; *'abl' — prepositional.
     *
     * {"type":"string","enum":["nom","gen","dat","acc","ins","abl"],"enumNames":["nominative","genitive","dative","accusative","instrumental","prepositional"]}
     */
    public function _name_case(string $_name_case) : GetInvitedUsers
    {
        $this->params['_name_case'] = $_name_case;
        return $this;
    }
}