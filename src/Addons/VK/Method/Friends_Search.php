<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of friends matching the search criteria.
 */
class Friends_Search extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('friends.search');
    }
    /**
     * User ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function user_id(integer $user_id) : Friends_Search
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Search query string (e.g., 'Vasya Babich').
     *
     * {"type":"string"}
     */
    public function _q(string $q) : Friends_Search
    {
        $this->params['q'] = $q;
        return $this;
    }
    /**
     * Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate' (birthdate), 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'rate', 'contacts', 'education', 'online';
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Friends_Search
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * Case for declension of user name and surname:; 'nom' — nominative (default); 'gen' — genitive ; 'dat' — dative; 'acc' — accusative ; 'ins' — instrumental ; 'abl' — prepositional
     *
     * {"type":"string","default":0,"enum":["nom","gen","dat","acc","ins","abl"],"enumNames":["nominative","genitive","dative","accusative","instrumental","prepositional"]}
     */
    public function _name_case(string $name_case) : Friends_Search
    {
        $this->params['name_case'] = $name_case;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of friends.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $offset) : Friends_Search
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of friends to return.
     *
     * {"type":"integer","minimum":0,"default":20,"maximum":1000}
     */
    public function _count(integer $count) : Friends_Search
    {
        $this->params['count'] = $count;
        return $this;
    }
}