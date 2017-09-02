<?php

namespace Bdb\Addons\VK\Method;

/**
 * Saves a value of variable with the name set by 'key' parameter.
 */
class Storage_Set extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('storage.set');
    }
    /**
     * not description
     *
     * {"type":"string","maxLength":100}
     */
    public function key(string $key) : Storage_Set
    {
        $this->params['key'] = $key;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function _value(string $value) : Storage_Set
    {
        $this->params['value'] = $value;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"integer","minimum":0}
     */
    public function _user_id(integer $user_id) : Storage_Set
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}