<?php

namespace Bdb\Addons\VK\Method;

/**
 * Saves market photos after successful uploading.
 */
class SaveMarketPhoto
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
    public function _group_id(integer $_group_id) : SaveMarketPhoto
    {
        $this->params['_group_id'] = $_group_id;
        return $this;
    }
    /**
     * Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
     *
     * {"type":"string"}
     */
    public function photo(string $photo) : SaveMarketPhoto
    {
        $this->params['photo'] = $photo;
        return $this;
    }
    /**
     * Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
     *
     * {"type":"integer"}
     */
    public function server(integer $server) : SaveMarketPhoto
    {
        $this->params['server'] = $server;
        return $this;
    }
    /**
     * Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
     *
     * {"type":"string"}
     */
    public function hash(string $hash) : SaveMarketPhoto
    {
        $this->params['hash'] = $hash;
        return $this;
    }
    /**
     * Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
     *
     * {"type":"string"}
     */
    public function _crop_data(string $_crop_data) : SaveMarketPhoto
    {
        $this->params['_crop_data'] = $_crop_data;
        return $this;
    }
    /**
     * Parameter returned when photos are [vk.com/dev/upload_files|uploaded to server].
     *
     * {"type":"string"}
     */
    public function _crop_hash(string $_crop_hash) : SaveMarketPhoto
    {
        $this->params['_crop_hash'] = $_crop_hash;
        return $this;
    }
}