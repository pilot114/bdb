<?php

namespace Bdb\Addons\VK\Method;

/**
 * Saves a photo to a user's or community's wall after being uploaded.
 */
class SaveWallPhoto
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of the user on whose wall the photo will be saved.
     *
     * {"type":"integer","minimum":0}
     */
    public function _user_id(integer $_user_id) : SaveWallPhoto
    {
        $this->params['_user_id'] = $_user_id;
        return $this;
    }
    /**
     * ID of community on whose wall the photo will be saved.
     *
     * {"type":"integer","minimum":0}
     */
    public function _group_id(integer $_group_id) : SaveWallPhoto
    {
        $this->params['_group_id'] = $_group_id;
        return $this;
    }
    /**
     * Parameter returned when the the photo is [vk.com/dev/upload_files|uploaded to the server].
     *
     * {"type":"string"}
     */
    public function photo(string $photo) : SaveWallPhoto
    {
        $this->params['photo'] = $photo;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"integer"}
     */
    public function _server(integer $_server) : SaveWallPhoto
    {
        $this->params['_server'] = $_server;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function _hash(string $_hash) : SaveWallPhoto
    {
        $this->params['_hash'] = $_hash;
        return $this;
    }
    /**
     * Geographical latitude, in degrees (from '-90' to '90').
     *
     * {"type":"number","minimum":-90,"maximum":90}
     */
    public function _latitude(number $_latitude) : SaveWallPhoto
    {
        $this->params['_latitude'] = $_latitude;
        return $this;
    }
    /**
     * Geographical longitude, in degrees (from '-180' to '180').
     *
     * {"type":"number","minimum":-180,"maximum":180}
     */
    public function _longitude(number $_longitude) : SaveWallPhoto
    {
        $this->params['_longitude'] = $_longitude;
        return $this;
    }
    /**
     * Text describing the photo. 2048 digits max.
     *
     * {"type":"string","maxLength":2048}
     */
    public function _caption(string $_caption) : SaveWallPhoto
    {
        $this->params['_caption'] = $_caption;
        return $this;
    }
}