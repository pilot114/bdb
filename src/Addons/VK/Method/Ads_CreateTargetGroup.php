<?php

namespace Bdb\Addons\VK\Method;

/**
 * Creates a group to re-target ads for users who visited advertiser's site (viewed information about the product, registered, etc.).
 */
class Ads_CreateTargetGroup extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('ads.createTargetGroup');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"integer"}
     */
    public function account_id(integer $account_id) : Ads_CreateTargetGroup
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * 'Only for advertising agencies.'; ID of the client with the advertising account where the group will be created.;
     *
     * {"type":"integer"}
     */
    public function _client_id(integer $client_id) : Ads_CreateTargetGroup
    {
        $this->params['client_id'] = $client_id;
        return $this;
    }
    /**
     * Name of the target group — a string up to 64 characters long.
     *
     * {"type":"string","maxLength":64}
     */
    public function name(string $name) : Ads_CreateTargetGroup
    {
        $this->params['name'] = $name;
        return $this;
    }
    /**
     * Domain of the site where user accounting code will be placed.
     *
     * {"type":"string"}
     */
    public function _domain(string $domain) : Ads_CreateTargetGroup
    {
        $this->params['domain'] = $domain;
        return $this;
    }
    /**
     * 'For groups with auditory created with pixel code only.'; ; Number of days after that users will be automatically removed from the group. '0' — not to remove users.;
     *
     * {"type":"integer","minimum":0}
     */
    public function _lifetime(integer $lifetime) : Ads_CreateTargetGroup
    {
        $this->params['lifetime'] = $lifetime;
        return $this;
    }
}