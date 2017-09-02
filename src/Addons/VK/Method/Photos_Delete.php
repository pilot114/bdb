<?php

namespace Bdb\Addons\VK\Method;

/**
 * Deletes a photo.
 */
class Photos_Delete extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('photos.delete');
    }
    /**
     * ID of the user or community that owns the photo.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $owner_id) : Photos_Delete
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Photo ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function photo_id(integer $photo_id) : Photos_Delete
    {
        $this->params['photo_id'] = $photo_id;
        return $this;
    }
}