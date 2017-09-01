<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of IDs of followers of the user in question, sorted by date added, most recent first.
 */
class GetFollowers
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    /**
     * User ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _user_id(integer $_user_id) : GetFollowers
    {
        $this->params['_user_id'] = $_user_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of followers.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $_offset) : GetFollowers
    {
        $this->params['_offset'] = $_offset;
        return $this;
    }
    /**
     * Number of followers to return.
     *
     * {"type":"integer","minimum":0,"default":100,"maximum":1000}
     */
    public function _count(integer $_count) : GetFollowers
    {
        $this->params['_count'] = $_count;
        return $this;
    }
    /**
     * Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate' (birthdate), 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'rate', 'contacts', 'education', 'online'.;
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $_fields) : GetFollowers
    {
        $this->params['_fields'] = $_fields;
        return $this;
    }
    /**
     * Case for declension of user name and surname:; 'nom' — nominative (default); 'gen' — genitive ; 'dat' — dative; 'acc' — accusative ; 'ins' — instrumental ; 'abl' — prepositional
     *
     * {"type":"string","enum":["nom","gen","dat","acc","ins","abl"],"enumNames":["nominative","genitive","dative","accusative","instrumental","prepositional"]}
     */
    public function _name_case(string $_name_case) : GetFollowers
    {
        $this->params['_name_case'] = $_name_case;
        return $this;
    }
}