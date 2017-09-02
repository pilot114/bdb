<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of profiles of users whom the current user may know.
 */
class Friends_GetSuggestions extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('friends.getSuggestions');
    }
    /**
     * Types of potential friends to return:; 'mutual' — users with many mutual friends ; 'contacts' — users found with the [vk.com/dev/account.importContacts|account.importContacts] method ; 'mutual_contacts' — users who imported the same contacts as the current user with the [vk.com/dev/account.importContacts|account.importContacts] method
     *
     * {"type":"array","items":{"type":"string","enum":["mutual","contacts","mutual_contacts"]}}
     */
    public function _filter(array $filter) : Friends_GetSuggestions
    {
        $this->params['filter'] = $filter;
        return $this;
    }
    /**
     * Number of suggestions to return.
     *
     * {"type":"integer","minimum":0,"maximum":500,"default":500}
     */
    public function _count(integer $count) : Friends_GetSuggestions
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of suggestions.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $offset) : Friends_GetSuggestions
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate' (birthdate), 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'rate', 'contacts', 'education', 'online', 'counters'.;
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Friends_GetSuggestions
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * Case for declension of user name and surname: ; 'nom' — nominative (default) ; 'gen' — genitive ; 'dat' — dative ; 'acc' — accusative ; 'ins' — instrumental ; 'abl' — prepositional
     *
     * {"type":"string","enum":["nom","gen","dat","acc","ins","abl"],"enumNames":["nominative","genitive","dative","accusative","instrumental","prepositional"]}
     */
    public function _name_case(string $name_case) : Friends_GetSuggestions
    {
        $this->params['name_case'] = $name_case;
        return $this;
    }
}