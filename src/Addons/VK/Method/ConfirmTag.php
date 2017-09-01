<?php

namespace Bdb\Addons\VK\Method;

/**
 * Confirms a tag on a photo.
 */
class ConfirmTag
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of the user or community that owns the photo.
     *
     * {"type":"integer"}
     */
    public function _owner_id(integer $_owner_id) : ConfirmTag
    {
        $this->params['_owner_id'] = $_owner_id;
        return $this;
    }
    /**
     * Photo ID.
     *
     * {"type":"string"}
     */
    public function photo_id(string $photo_id) : ConfirmTag
    {
        $this->params['photo_id'] = $photo_id;
        return $this;
    }
    /**
     * Tag ID.
     *
     * {"type":"integer"}
     */
    public function tag_id(integer $tag_id) : ConfirmTag
    {
        $this->params['tag_id'] = $tag_id;
        return $this;
    }
}