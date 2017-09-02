<?php

namespace Bdb\Addons\VK\Method;

/**
 * Reorders the collections list.
 */
class Market_ReorderAlbums extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('market.reorderAlbums');
    }
    /**
     * ID of an item owner community.
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : Market_ReorderAlbums
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Collection ID.
     *
     * {"type":"integer"}
     */
    public function album_id(integer $album_id) : Market_ReorderAlbums
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
    /**
     * ID of a collection to place current collection before it.
     *
     * {"type":"integer","minimum":0}
     */
    public function _before(integer $before) : Market_ReorderAlbums
    {
        $this->params['before'] = $before;
        return $this;
    }
    /**
     * ID of a collection to place current collection after it.
     *
     * {"type":"integer","minimum":0}
     */
    public function _after(integer $after) : Market_ReorderAlbums
    {
        $this->params['after'] = $after;
        return $this;
    }
}