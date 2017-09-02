<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of target groups.
 */
class Ads_GetTargetGroups extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('ads.getTargetGroups');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"integer"}
     */
    public function account_id(integer $account_id) : Ads_GetTargetGroups
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * 'Only for advertising agencies.'; ID of the client with the advertising account where the group will be created.;
     *
     * {"type":"integer"}
     */
    public function _client_id(integer $client_id) : Ads_GetTargetGroups
    {
        $this->params['client_id'] = $client_id;
        return $this;
    }
    /**
     * '1' — to return pixel code.
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $extended) : Ads_GetTargetGroups
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}