<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns URL to upload an ad photo to.
 */
class GetUploadURL
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Ad format:; *1 — image and text;; *2 — big image;; *3 — exclusive format;; *4 — community, square image;; *7 — special app format.
     *
     * {"type":"integer","enum":[1,2,3,4,7],"enumNames":["image and text","big image","exclusive format","community, square image","special app format"]}
     */
    public function ad_format(integer $ad_format) : GetUploadURL
    {
        $this->params['ad_format'] = $ad_format;
        return $this;
    }
}