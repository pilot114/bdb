<?php

namespace Bdb\Addons\VK\Method;

/**
 * Hides a video catalog section from a user.
 */
class HideCatalogSection
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * 'id' value returned with a block to hide by the '' method.
     *
     * {"type":"integer"}
     */
    public function section_id(integer $section_id) : HideCatalogSection
    {
        $this->params['section_id'] = $section_id;
        return $this;
    }
}