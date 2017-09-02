<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns the server address for market album photo upload.
 */
class Photos_GetMarketAlbumUploadServer extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('photos.getMarketAlbumUploadServer');
    }
    /**
     * Community ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : Photos_GetMarketAlbumUploadServer
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}