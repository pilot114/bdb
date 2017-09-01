<?php

namespace Bdb\Addons\VK\Method;

/**
 * Edits clients of an advertising agency.
 */
class UpdateClients
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
    public function account_id(integer $account_id) : UpdateClients
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Serialized JSON array of objects that describe changes in clients. Description of 'client_mod' objects see below.
     *
     * {"type":"string"}
     */
    public function data(string $data) : UpdateClients
    {
        $this->params['data'] = $data;
        return $this;
    }
}