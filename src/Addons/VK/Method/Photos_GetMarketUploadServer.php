<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns the server address for market photo upload.
 */
class Photos_GetMarketUploadServer extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('photos.getMarketUploadServer');
    }
    /**
     * Community ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : Photos_GetMarketUploadServer
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * '1' if you want to upload the main item photo.
     *
     * {"type":"boolean"}
     */
    public function _main_photo(boolean $main_photo) : Photos_GetMarketUploadServer
    {
        $this->params['main_photo'] = $main_photo;
        return $this;
    }
    /**
     * X coordinate of the crop left upper corner.
     *
     * {"type":"integer","minimum":0}
     */
    public function _crop_x(integer $crop_x) : Photos_GetMarketUploadServer
    {
        $this->params['crop_x'] = $crop_x;
        return $this;
    }
    /**
     * Y coordinate of the crop left upper corner.
     *
     * {"type":"integer","minimum":0}
     */
    public function _crop_y(integer $crop_y) : Photos_GetMarketUploadServer
    {
        $this->params['crop_y'] = $crop_y;
        return $this;
    }
    /**
     * Width of the cropped photo in px.
     *
     * {"type":"integer","minimum":400}
     */
    public function _crop_width(integer $crop_width) : Photos_GetMarketUploadServer
    {
        $this->params['crop_width'] = $crop_width;
        return $this;
    }
}