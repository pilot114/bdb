<?php

namespace Bdb\Addons\VK\Method;

/**
 * not description
 */
class Stats_TrackVisitor extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('stats.trackVisitor');
    }
}