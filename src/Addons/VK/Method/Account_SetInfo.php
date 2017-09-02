<?php

namespace Bdb\Addons\VK\Method;

/**
 * Allows to edit the current account info.
 */
class Account_SetInfo extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('account.setInfo');
    }
    /**
     * Setting name.
     *
     * {"type":"string"}
     */
    public function _name(string $name) : Account_SetInfo
    {
        $this->params['name'] = $name;
        return $this;
    }
    /**
     * Setting value.
     *
     * {"type":"string"}
     */
    public function _value(string $value) : Account_SetInfo
    {
        $this->params['value'] = $value;
        return $this;
    }
}