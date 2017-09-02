<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns URL to upload an ad video to.
 */
class Ads_GetVideoUploadURL extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('ads.getVideoUploadURL');
    }
}