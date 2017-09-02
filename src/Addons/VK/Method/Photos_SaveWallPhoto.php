<?php

namespace Bdb\Addons\VK\Method;

/**
 * Saves a photo to a user's or community's wall after being uploaded.
 */
class Photos_SaveWallPhoto extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('photos.saveWallPhoto');
    }
    /**
     * ID of the user on whose wall the photo will be saved.
     *
     * {"type":"integer","minimum":0}
     */
    public function _user_id(integer $user_id) : Photos_SaveWallPhoto
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * ID of community on whose wall the photo will be saved.
     *
     * {"type":"integer","minimum":0}
     */
    public function _group_id(integer $group_id) : Photos_SaveWallPhoto
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Parameter returned when the the photo is [vk.com/dev/upload_files|uploaded to the server].
     *
     * {"type":"string"}
     */
    public function photo(string $photo) : Photos_SaveWallPhoto
    {
        $this->params['photo'] = $photo;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"integer"}
     */
    public function _server(integer $server) : Photos_SaveWallPhoto
    {
        $this->params['server'] = $server;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function _hash(string $hash) : Photos_SaveWallPhoto
    {
        $this->params['hash'] = $hash;
        return $this;
    }
    /**
     * Geographical latitude, in degrees (from '-90' to '90').
     *
     * {"type":"float","minimum":-90,"maximum":90}
     */
    public function _latitude(float $latitude) : Photos_SaveWallPhoto
    {
        $this->params['latitude'] = $latitude;
        return $this;
    }
    /**
     * Geographical longitude, in degrees (from '-180' to '180').
     *
     * {"type":"float","minimum":-180,"maximum":180}
     */
    public function _longitude(float $longitude) : Photos_SaveWallPhoto
    {
        $this->params['longitude'] = $longitude;
        return $this;
    }
    /**
     * Text describing the photo. 2048 digits max.
     *
     * {"type":"string","maxLength":2048}
     */
    public function _caption(string $caption) : Photos_SaveWallPhoto
    {
        $this->params['caption'] = $caption;
        return $this;
    }
}