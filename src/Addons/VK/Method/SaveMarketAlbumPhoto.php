<?php

namespace Bdb\Addons\VK\Method;

/**
 * Saves market album photos after successful uploading.
 */
class SaveMarketAlbumPhoto
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
    public function group_id(integer $group_id) : SaveMarketAlbumPhoto
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
     *
     * {"type":"string"}
     */
    public function photo(string $photo) : SaveMarketAlbumPhoto
    {
        $this->params['photo'] = $photo;
        return $this;
    }
    /**
     * Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
     *
     * {"type":"integer","minimum":0}
     */
    public function server(integer $server) : SaveMarketAlbumPhoto
    {
        $this->params['server'] = $server;
        return $this;
    }
    /**
     * Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
     *
     * {"type":"string"}
     */
    public function hash(string $hash) : SaveMarketAlbumPhoto
    {
        $this->params['hash'] = $hash;
        return $this;
    }
}