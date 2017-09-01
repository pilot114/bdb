<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns the server address for market photo upload.
 */
class GetMarketUploadServer
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Community ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : GetMarketUploadServer
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * '1' if you want to upload the main item photo.
     *
     * {"type":"boolean"}
     */
    public function _main_photo(boolean $_main_photo) : GetMarketUploadServer
    {
        $this->params['_main_photo'] = $_main_photo;
        return $this;
    }
    /**
     * X coordinate of the crop left upper corner.
     *
     * {"type":"integer","minimum":0}
     */
    public function _crop_x(integer $_crop_x) : GetMarketUploadServer
    {
        $this->params['_crop_x'] = $_crop_x;
        return $this;
    }
    /**
     * Y coordinate of the crop left upper corner.
     *
     * {"type":"integer","minimum":0}
     */
    public function _crop_y(integer $_crop_y) : GetMarketUploadServer
    {
        $this->params['_crop_y'] = $_crop_y;
        return $this;
    }
    /**
     * Width of the cropped photo in px.
     *
     * {"type":"integer","minimum":400}
     */
    public function _crop_width(integer $_crop_width) : GetMarketUploadServer
    {
        $this->params['_crop_width'] = $_crop_width;
        return $this;
    }
}