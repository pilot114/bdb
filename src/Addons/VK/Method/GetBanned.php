<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of users and communities banned from the current user's newsfeed.
 */
class GetBanned
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * '1' — return extra information about users and communities
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $_extended) : GetBanned
    {
        $this->params['_extended'] = $_extended;
        return $this;
    }
    /**
     * Profile fields to return.; ;
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $_fields) : GetBanned
    {
        $this->params['_fields'] = $_fields;
        return $this;
    }
    /**
     * Case for declension of user name and surname:; 'nom' — nominative (default); 'gen' — genitive ; 'dat' — dative; 'acc' — accusative ; 'ins' — instrumental ; 'abl' — prepositional
     *
     * {"type":"string","enum":["nom","gen","dat","acc","ins","abl"],"enumNames":["nominative","genitive","dative","accusative","instrumental","prepositional"]}
     */
    public function _name_case(string $_name_case) : GetBanned
    {
        $this->params['_name_case'] = $_name_case;
        return $this;
    }
}