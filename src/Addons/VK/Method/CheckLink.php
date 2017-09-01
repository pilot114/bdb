<?php

namespace Bdb\Addons\VK\Method;

/**
 * Allows to check the ad link.
 */
class CheckLink
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
    public function account_id(integer $account_id) : CheckLink
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Object type:; *'community' — community;; *'post' — community post;; *'application' — VK application;; *'video' — video;; *'site' — external site.
     *
     * {"type":"string","enum":["community","post","application","video","site"]}
     */
    public function link_type(string $link_type) : CheckLink
    {
        $this->params['link_type'] = $link_type;
        return $this;
    }
    /**
     * Object URL.
     *
     * {"type":"string"}
     */
    public function link_url(string $link_url) : CheckLink
    {
        $this->params['link_url'] = $link_url;
        return $this;
    }
    /**
     * Campaign ID
     *
     * {"type":"integer"}
     */
    public function _campaign_id(integer $_campaign_id) : CheckLink
    {
        $this->params['_campaign_id'] = $_campaign_id;
        return $this;
    }
}