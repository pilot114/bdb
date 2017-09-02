<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns market items bookmarked by current user.
 */
class Fave_GetMarketItems extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('fave.getMarketItems');
    }
    /**
     * Number of results to return. ;
     *
     * {"type":"integer","minimum":0,"default":50}
     */
    public function _count(integer $count) : Fave_GetMarketItems
    {
        $this->params['count'] = $count;
        return $this;
    }
    /**
     * '1' – to return additional fields 'likes, can_comment, can_repost, photos'. By default: '0'.
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $extended) : Fave_GetMarketItems
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}