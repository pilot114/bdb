<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of friends who can be called by the current user.
 */
class Friends_GetAvailableForCall extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('friends.getAvailableForCall');
    }
    /**
     * Profile fields to return. Sample values: 'uid', 'first_name', 'last_name', 'nickname', 'sex', 'bdate' (birthdate), 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'domain', 'has_mobile', 'rate', 'contacts', 'education'.;
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Friends_GetAvailableForCall
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * Case for declension of user name and surname: ; 'nom' — nominative (default) ; 'gen' — genitive ; 'dat' — dative ; 'acc' — accusative ; 'ins' — instrumental ; 'abl' — prepositional
     *
     * {"type":"string","default":0,"enum":["nom","gen","dat","acc","ins","abl"],"enumNames":["nominative","genitive","dative","accusative","instrumental","prepositional"]}
     */
    public function _name_case(string $name_case) : Friends_GetAvailableForCall
    {
        $this->params['name_case'] = $name_case;
        return $this;
    }
}