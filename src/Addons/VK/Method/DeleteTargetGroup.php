<?php

namespace Bdb\Addons\VK\Method;

/**
 * Deletes a retarget group.
 */
class DeleteTargetGroup
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
    public function account_id(integer $account_id) : DeleteTargetGroup
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * 'Only for advertising agencies.' ; ID of the client with the advertising account where the group will be created.;
     *
     * {"type":"integer"}
     */
    public function _client_id(integer $_client_id) : DeleteTargetGroup
    {
        $this->params['_client_id'] = $_client_id;
        return $this;
    }
    /**
     * Group ID.
     *
     * {"type":"integer"}
     */
    public function target_group_id(integer $target_group_id) : DeleteTargetGroup
    {
        $this->params['target_group_id'] = $target_group_id;
        return $this;
    }
}