<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns URL to upload an ad video to.
 */
class GetVideoUploadURL
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
}