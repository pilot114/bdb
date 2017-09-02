<?php

namespace Bdb\Addons\VK\Method;

/**
 * Edits a retarget group.
 */
class Ads_UpdateTargetGroup extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('ads.updateTargetGroup');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"integer"}
     */
    public function account_id(integer $account_id) : Ads_UpdateTargetGroup
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * 'Only for advertising agencies.' ; ID of the client with the advertising account where the group will be created.;
     *
     * {"type":"integer"}
     */
    public function _client_id(integer $client_id) : Ads_UpdateTargetGroup
    {
        $this->params['client_id'] = $client_id;
        return $this;
    }
    /**
     * Group ID.
     *
     * {"type":"integer"}
     */
    public function target_group_id(integer $target_group_id) : Ads_UpdateTargetGroup
    {
        $this->params['target_group_id'] = $target_group_id;
        return $this;
    }
    /**
     * New name of the target group — a string up to 64 characters long.
     *
     * {"type":"string","maxLength":64}
     */
    public function name(string $name) : Ads_UpdateTargetGroup
    {
        $this->params['name'] = $name;
        return $this;
    }
    /**
     * Domain of the site where user accounting code will be placed.
     *
     * {"type":"string"}
     */
    public function _domain(string $domain) : Ads_UpdateTargetGroup
    {
        $this->params['domain'] = $domain;
        return $this;
    }
    /**
     * 'Only for the groups that get audience from sites with user accounting code.'; Time in days when users added to a retarget group will be automatically excluded from it. ; '0' – automatic exclusion is off.
     *
     * {"type":"integer","minimum":0}
     */
    public function _lifetime(integer $lifetime) : Ads_UpdateTargetGroup
    {
        $this->params['lifetime'] = $lifetime;
        return $this;
    }
}