<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns an upload link for chat cover pictures.
 */
class Photos_GetChatUploadServer extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('photos.getChatUploadServer');
    }
    /**
     * ID of the chat for which you want to upload a cover photo.
     *
     * {"type":"integer","minimum":0}
     */
    public function chat_id(integer $chat_id) : Photos_GetChatUploadServer
    {
        $this->params['chat_id'] = $chat_id;
        return $this;
    }
    /**
     * 
     *
     * {"type":"integer","minimum":0}
     */
    public function _crop_x(integer $crop_x) : Photos_GetChatUploadServer
    {
        $this->params['crop_x'] = $crop_x;
        return $this;
    }
    /**
     * 
     *
     * {"type":"integer","minimum":0}
     */
    public function _crop_y(integer $crop_y) : Photos_GetChatUploadServer
    {
        $this->params['crop_y'] = $crop_y;
        return $this;
    }
    /**
     * Width (in pixels) of the photo after cropping.
     *
     * {"type":"integer","minimum":200}
     */
    public function _crop_width(integer $crop_width) : Photos_GetChatUploadServer
    {
        $this->params['crop_width'] = $crop_width;
        return $this;
    }
}