<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns the server address for photo upload onto a user's wall.
 */
class Photos_GetWallUploadServer extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('photos.getWallUploadServer');
    }
    /**
     * ID of community to whose wall the photo will be uploaded.
     *
     * {"type":"int"}
     */
    public function _group_id(int $group_id) : Photos_GetWallUploadServer
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}