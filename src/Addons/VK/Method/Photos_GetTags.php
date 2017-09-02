<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of tags on a photo.
 */
class Photos_GetTags extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('photos.getTags');
    }
    /**
     * ID of the user or community that owns the photo.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $owner_id) : Photos_GetTags
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Photo ID.
     *
     * {"type":"integer"}
     */
    public function photo_id(integer $photo_id) : Photos_GetTags
    {
        $this->params['photo_id'] = $photo_id;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function _access_key(string $access_key) : Photos_GetTags
    {
        $this->params['access_key'] = $access_key;
        return $this;
    }
}