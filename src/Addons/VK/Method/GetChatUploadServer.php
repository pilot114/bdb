<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns an upload link for chat cover pictures.
 */
class GetChatUploadServer
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * ID of the chat for which you want to upload a cover photo.
     *
     * {"type":"integer","minimum":0}
     */
    public function chat_id(integer $chat_id) : GetChatUploadServer
    {
        $this->params['chat_id'] = $chat_id;
        return $this;
    }
    /**
     * 
     *
     * {"type":"integer","minimum":0}
     */
    public function _crop_x(integer $_crop_x) : GetChatUploadServer
    {
        $this->params['_crop_x'] = $_crop_x;
        return $this;
    }
    /**
     * 
     *
     * {"type":"integer","minimum":0}
     */
    public function _crop_y(integer $_crop_y) : GetChatUploadServer
    {
        $this->params['_crop_y'] = $_crop_y;
        return $this;
    }
    /**
     * Width (in pixels) of the photo after cropping.
     *
     * {"type":"integer","minimum":200}
     */
    public function _crop_width(integer $_crop_width) : GetChatUploadServer
    {
        $this->params['_crop_width'] = $_crop_width;
        return $this;
    }
}