<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns market items bookmarked by current user.
 */
class GetMarketItems
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Number of results to return. ;
     *
     * {"type":"integer","minimum":0,"default":50}
     */
    public function _count(integer $_count) : GetMarketItems
    {
        $this->params['_count'] = $_count;
        return $this;
    }
    /**
     * '1' – to return additional fields 'likes, can_comment, can_repost, photos'. By default: '0'.
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $_extended) : GetMarketItems
    {
        $this->params['_extended'] = $_extended;
        return $this;
    }
}