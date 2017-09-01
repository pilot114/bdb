<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns an upload server address for a profile or community photo.
 */
class GetOwnerPhotoUploadServer
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * identifier of a community or current user.; ; "Note that community id must be negative.; 'owner_id=1' – user; 'owner_id=-1' – community; "
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $_owner_id) : GetOwnerPhotoUploadServer
    {
        $this->params['_owner_id'] = $_owner_id;
        return $this;
    }
}