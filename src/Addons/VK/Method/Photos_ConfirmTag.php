<?php

namespace Bdb\Addons\VK\Method;

/**
 * Confirms a tag on a photo.
 */
class Photos_ConfirmTag extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('photos.confirmTag');
    }
    /**
     * ID of the user or community that owns the photo.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $owner_id) : Photos_ConfirmTag
    {
        $this->params['owner_id'] = $owner_id;
        return $this;
    }
    /**
     * Photo ID.
     *
     * {"type":"string"}
     */
    public function photo_id(string $photo_id) : Photos_ConfirmTag
    {
        $this->params['photo_id'] = $photo_id;
        return $this;
    }
    /**
     * Tag ID.
     *
     * {"type":"integer"}
     */
    public function tag_id(integer $tag_id) : Photos_ConfirmTag
    {
        $this->params['tag_id'] = $tag_id;
        return $this;
    }
}