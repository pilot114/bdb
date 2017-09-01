<?php

namespace Bdb\Addons\VK\Method;

/**
 * Creates a group to re-target ads for users who visited advertiser's site (viewed information about the product, registered, etc.).
 */
class CreateTargetGroup
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
    public function account_id(integer $account_id) : CreateTargetGroup
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * 'Only for advertising agencies.'; ID of the client with the advertising account where the group will be created.;
     *
     * {"type":"integer"}
     */
    public function _client_id(integer $_client_id) : CreateTargetGroup
    {
        $this->params['_client_id'] = $_client_id;
        return $this;
    }
    /**
     * Name of the target group — a string up to 64 characters long.
     *
     * {"type":"string","maxLength":64}
     */
    public function name(string $name) : CreateTargetGroup
    {
        $this->params['name'] = $name;
        return $this;
    }
    /**
     * Domain of the site where user accounting code will be placed.
     *
     * {"type":"string"}
     */
    public function _domain(string $_domain) : CreateTargetGroup
    {
        $this->params['_domain'] = $_domain;
        return $this;
    }
    /**
     * 'For groups with auditory created with pixel code only.'; ; Number of days after that users will be automatically removed from the group. '0' — not to remove users.;
     *
     * {"type":"integer","minimum":0}
     */
    public function _lifetime(integer $_lifetime) : CreateTargetGroup
    {
        $this->params['_lifetime'] = $_lifetime;
        return $this;
    }
}