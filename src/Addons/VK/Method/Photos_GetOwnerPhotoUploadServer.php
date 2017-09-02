<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns an upload server address for a profile or community photo.
 */
class Photos_GetOwnerPhotoUploadServer extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('photos.getOwnerPhotoUploadServer');
    }
    /**
     * identifier of a community or current user.; ; "Note that community id must be negative.; 'owner_id=1' – user; 'owner_id=-1' – community; "
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $owner_id) : Photos_GetOwnerPhotoUploadServer
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
}