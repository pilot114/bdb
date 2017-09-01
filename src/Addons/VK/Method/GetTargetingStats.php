<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns the size of targeting audience, and also recommended values for CPC and CPM.
 */
class GetTargetingStats
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
    public function account_id(integer $account_id) : GetTargetingStats
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Serialized JSON object that describes targeting parameters. Description of 'criteria' object see below.
     *
     * {"type":"string"}
     */
    public function _criteria(string $_criteria) : GetTargetingStats
    {
        $this->params['_criteria'] = $_criteria;
        return $this;
    }
    /**
     * ID of an ad which targeting parameters shall be analyzed.
     *
     * {"type":"integer"}
     */
    public function _ad_id(integer $_ad_id) : GetTargetingStats
    {
        $this->params['_ad_id'] = $_ad_id;
        return $this;
    }
    /**
     * Ad format. Possible values:; *'1' — image and text;; *'2' — big image;; *'3' — exclusive format;; *'4' — community, square image;; *'7' — special app format;; *'8' — special community format;; *'9' — post in community;; *'10' — app board.
     *
     * {"type":"integer","enum":[1,2,3,4,7,8,9,10],"enumNames":["image and text","big image","exclusive format","community square image","special app format","special community format","post in community","app board"]}
     */
    public function _ad_format(integer $_ad_format) : GetTargetingStats
    {
        $this->params['_ad_format'] = $_ad_format;
        return $this;
    }
    /**
     * Platforms to use for ad showing. Possible values:; (for 'ad_format' = '1'); *'0' — VK and partner sites;; *'1' — VK only.; (for 'ad_format' = '9'); *'all' — all platforms;; *'desktop' — desktop version;; *'mobile' — mobile version and apps.
     *
     * {"type":"string"}
     */
    public function _ad_platform(string $_ad_platform) : GetTargetingStats
    {
        $this->params['_ad_platform'] = $_ad_platform;
        return $this;
    }
    /**
     * URL for the advertised object.
     *
     * {"type":"string"}
     */
    public function link_url(string $link_url) : GetTargetingStats
    {
        $this->params['link_url'] = $link_url;
        return $this;
    }
    /**
     * Domain of the advertised object.
     *
     * {"type":"string"}
     */
    public function _link_domain(string $_link_domain) : GetTargetingStats
    {
        $this->params['_link_domain'] = $_link_domain;
        return $this;
    }
}