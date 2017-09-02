<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of user IDs or detailed information about a user's friends.
 */
class Friends_Get extends \Bdb\Addons\VK\BaseMethod
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    public function __construct($client, $defaultQuery)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('friends.get');
    }
    /**
     * User ID. By default, the current user ID.
     *
     * {"type":"integer"}
     */
    public function _user_id(integer $user_id) : Friends_Get
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Sort order: ; 'name' — by name (enabled only if the 'fields' parameter is used); 'hints' — by rating, similar to how friends are sorted in My friends section; ; This parameter is available only for [vk.com/dev/standalone|desktop applications].
     *
     * {"type":"string","enum":["name","hints"]}
     */
    public function _order(string $order) : Friends_Get
    {
        $this->params['order'] = $order;
        return $this;
    }
    /**
     * ID of the friend list returned by the [vk.com/dev/friends.getLists|friends.getLists] method to be used as the source. This parameter is taken into account only when the uid parameter is set to the current user ID.; ; This parameter is available only for [vk.com/dev/standalone|desktop applications].
     *
     * {"type":"integer","minimum":0}
     */
    public function _list_id(integer $list_id) : Friends_Get
    {
        $this->params['list_id'] = $list_id;
        return $this;
    }
    /**
     * Number of friends to return.
     *
     * {"type":"integer","minimum":0}
     */
    public function _count(integer $count) : Friends_Get
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of friends.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $offset) : Friends_Get
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Profile fields to return. Sample values: 'uid', 'first_name', 'last_name', 'nickname', 'sex', 'bdate' (birthdate), 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'domain', 'has_mobile', 'rate', 'contacts', 'education'.;
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Friends_Get
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * Case for declension of user name and surname: ; 'nom' — nominative (default) ; 'gen' — genitive ; 'dat' — dative ; 'acc' — accusative ; 'ins' — instrumental ; 'abl' — prepositional
     *
     * {"type":"string","enum":["nom","gen","dat","acc","ins","abl"],"enumNames":["nominative","genitive","dative","accusative","instrumental","prepositional"]}
     */
    public function _name_case(string $name_case) : Friends_Get
    {
        $this->params['name_case'] = $name_case;
        return $this;
    }
}