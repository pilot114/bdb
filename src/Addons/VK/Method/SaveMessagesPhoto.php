<?php

namespace Bdb\Addons\VK\Method;

/**
 * Saves a photo after being successfully uploaded. URL obtained with [vk.com/dev/photos.getMessagesUploadServer|photos.getMessagesUploadServer] method.
 */
class SaveMessagesPhoto
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Parameter returned when the photo is [vk.com/dev/upload_files|uploaded to the server].
     *
     * {"type":"string"}
     */
    public function photo(string $photo) : SaveMessagesPhoto
    {
        $this->params['photo'] = $photo;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"integer"}
     */
    public function _server(integer $_server) : SaveMessagesPhoto
    {
        $this->params['_server'] = $_server;
        return $this;
    }
    /**
     * not description
     *
     * {"type":"string"}
     */
    public function _hash(string $_hash) : SaveMessagesPhoto
    {
        $this->params['_hash'] = $_hash;
        return $this;
    }
}