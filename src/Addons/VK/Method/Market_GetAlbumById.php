<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns items album's data
 */
class Market_GetAlbumById extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('market.getAlbumById');
    }
    /**
     * identifier of an album owner community; "Note that community id in the 'owner_id' parameter should be negative number. For example 'owner_id'=-1 matches the [vk.com/apiclub|VK API] community "
     *
     * {"type":"integer"}
     */
    public function owner_id(integer $owner_id) : Market_GetAlbumById
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * collections identifiers to obtain data from
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function album_ids(array $album_ids) : Market_GetAlbumById
    {
        $this->params['album_ids'] = $album_ids;
        return $this;
    }
}