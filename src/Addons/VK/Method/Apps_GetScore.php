<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns user score in app
 */
class Apps_GetScore extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('apps.getScore');
    }
    /**
     * not description
     *
     * {"type":"integer","minimum":0}
     */
    public function user_id(integer $user_id) : Apps_GetScore
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
}