<?php

namespace Bdb\Addons\VK\Method;

/**
 * Creates clients of an advertising agency.
 */
class CreateClients
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
    public function account_id(integer $account_id) : CreateClients
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Serialized JSON array of objects that describe created campaigns. Description of 'client_specification' objects see below.
     *
     * {"type":"string"}
     */
    public function data(string $data) : CreateClients
    {
        $this->params['data'] = $data;
        return $this;
    }
}