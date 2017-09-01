<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of the current user's friends whose phone numbers, validated or specified in a profile, are in a given list.
 */
class GetByPhones
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * List of phone numbers in MSISDN format (maximum 1000).; Example:; "+79219876543,+79111234567"
     *
     * {"type":"array","items":{"type":"string"},"maxItems":1000}
     */
    public function _phones(array $_phones) : GetByPhones
    {
        $this->params['_phones'] = $_phones;
        return $this;
    }
    /**
     * Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate' (birthdate), 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'rate', 'contacts', 'education', 'online, counters'.;
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $_fields) : GetByPhones
    {
        $this->params['_fields'] = $_fields;
        return $this;
    }
}