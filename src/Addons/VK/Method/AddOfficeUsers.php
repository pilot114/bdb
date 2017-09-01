<?php

namespace Bdb\Addons\VK\Method;

/**
 * Adds managers and/or supervisors to advertising account.
 */
class AddOfficeUsers
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Advertising account ID.
     *
     * {"type":"integer"}
     */
    public function account_id(integer $account_id) : AddOfficeUsers
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Serialized JSON array of objects that describe added managers. Description of 'user_specification' objects see below.
     *
     * {"type":"string"}
     */
    public function data(string $data) : AddOfficeUsers
    {
        $this->params['data'] = $data;
        return $this;
    }
}