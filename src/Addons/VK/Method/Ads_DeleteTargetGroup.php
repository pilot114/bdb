<?php

namespace Bdb\Addons\VK\Method;

/**
 * Deletes a retarget group.
 */
class Ads_DeleteTargetGroup extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('ads.deleteTargetGroup');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"int"}
     */
    public function account_id(int $account_id) : Ads_DeleteTargetGroup
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * 'Only for advertising agencies.' ; ID of the client with the advertising account where the group will be created.;
     *
     * {"type":"int"}
     */
    public function _client_id(int $client_id) : Ads_DeleteTargetGroup
    {
        $this->params['client_id'] = $client_id;
        return $this;
    }
    /**
     * Group ID.
     *
     * {"type":"int"}
     */
    public function target_group_id(int $target_group_id) : Ads_DeleteTargetGroup
    {
        $this->params['target_group_id'] = $target_group_id;
        return $this;
    }
}