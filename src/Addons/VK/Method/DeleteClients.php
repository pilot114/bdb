<?php

namespace Bdb\Addons\VK\Method;

/**
 * Archives clients of an advertising agency.
 */
class DeleteClients
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
    public function account_id(integer $account_id) : DeleteClients
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Serialized JSON array with IDs of deleted clients.
     *
     * {"type":"string"}
     */
    public function ids(string $ids) : DeleteClients
    {
        $this->params['ids'] = $ids;
        return $this;
    }
}