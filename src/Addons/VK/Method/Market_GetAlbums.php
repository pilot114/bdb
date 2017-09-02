<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns community's collections list.
 */
class Market_GetAlbums extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('market.getAlbums');
    }
    /**
     * ID of an items owner community.
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : Market_GetAlbums
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of results.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $offset) : Market_GetAlbums
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of items to return.
     *
     * {"type":"integer","minimum":0,"default":50,"maximum":100}
     */
    public function _count(integer $count) : Market_GetAlbums
    {
        $this->params['count'] = $count;
        return $this;
    }
}