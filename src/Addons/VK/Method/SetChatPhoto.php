<?php

namespace Bdb\Addons\VK\Method;

/**
 * Sets a previously-uploaded picture as the cover picture of a chat.
 */
class SetChatPhoto
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Upload URL from the 'response' field returned by the [vk.com/dev/photos.getChatUploadServer|photos.getChatUploadServer] method upon successfully uploading an image.
     *
     * {"type":"string"}
     */
    public function file(string $file) : SetChatPhoto
    {
        $this->params['file'] = $file;
        return $this;
    }
}