<?php

namespace Bdb\Addons\VK\Method;

/**
 * Removes managers and/or supervisors from advertising account.
 */
class RemoveOfficeUsers
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
    public function account_id(integer $account_id) : RemoveOfficeUsers
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Serialized JSON array with IDs of deleted managers.
     *
     * {"type":"string"}
     */
    public function ids(string $ids) : RemoveOfficeUsers
    {
        $this->params['ids'] = $ids;
        return $this;
    }
}