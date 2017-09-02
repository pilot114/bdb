<?php

namespace Bdb\Addons\VK\Method;

/**
 * Hides a video catalog section from a user.
 */
class Video_HideCatalogSection extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('video.hideCatalogSection');
    }
    /**
     * 'id' value returned with a block to hide by the '' method.
     *
     * {"type":"integer"}
     */
    public function section_id(integer $section_id) : Video_HideCatalogSection
    {
        $this->params['section_id'] = $section_id;
        return $this;
    }
}