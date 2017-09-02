<?php

namespace Bdb\Addons\VK\Method;

/**
 * Deletes a collection of items.
 */
class Market_DeleteAlbum extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('market.deleteAlbum');
    }
    /**
     * ID of an collection owner community.
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : Market_DeleteAlbum
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Collection ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function album_id(integer $album_id) : Market_DeleteAlbum
    {
        $this->params['album_id'] = $album_id;
        return $this;
    }
}