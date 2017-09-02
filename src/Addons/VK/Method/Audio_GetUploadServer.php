<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns the server address to [vk.com/dev/upload_files_2|upload audio files].
 */
class Audio_GetUploadServer extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('audio.getUploadServer');
    }
}