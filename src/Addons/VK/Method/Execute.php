<?php

namespace Bdb\Addons\VK\Method;

/**
 * Execute
 */
class Execute extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('execute');
    }
    /**
     * Code for execute
     */
    public function code(string $code) : Execute
    {
        $this->params['code'] = $code;
        return $this;
    }
}