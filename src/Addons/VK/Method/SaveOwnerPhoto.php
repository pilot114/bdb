<?php

namespace Bdb\Addons\VK\Method;

/**
 * Saves a profile or community photo. Upload URL can be got with the [vk.com/dev/photos.getOwnerPhotoUploadServer|photos.getOwnerPhotoUploadServer] method.
 */
class SaveOwnerPhoto
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * parameter returned after [vk.com/dev/upload_files|photo upload].
     *
     * {"type":"string"}
     */
    public function _server(string $_server) : SaveOwnerPhoto
    {
        $this->params['_server'] = $_server;
        return $this;
    }
    /**
     * parameter returned after [vk.com/dev/upload_files|photo upload].
     *
     * {"type":"string"}
     */
    public function _hash(string $_hash) : SaveOwnerPhoto
    {
        $this->params['_hash'] = $_hash;
        return $this;
    }
    /**
     * parameter returned after [vk.com/dev/upload_files|photo upload].
     *
     * {"type":"string"}
     */
    public function _photo(string $_photo) : SaveOwnerPhoto
    {
        $this->params['_photo'] = $_photo;
        return $this;
    }
}