<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of managers and supervisors of advertising account.
 */
class Ads_GetOfficeUsers extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('ads.getOfficeUsers');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"integer"}
     */
    public function account_id(integer $account_id) : Ads_GetOfficeUsers
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
}