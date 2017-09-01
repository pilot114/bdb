<?php

namespace Bdb\Addons\VK\Method;

/**
 * Removes link from the user's faves.
 */
class RemoveLink
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Link ID (can be obtained by [vk.com/dev/faves.getLinks|faves.getLinks] method).
     *
     * {"type":"string"}
     */
    public function link_id(string $link_id) : RemoveLink
    {
        $this->params['link_id'] = $link_id;
        return $this;
    }
}