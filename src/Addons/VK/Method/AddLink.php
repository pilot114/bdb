<?php

namespace Bdb\Addons\VK\Method;

/**
 * Adds a link to user faves.
 */
class AddLink
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Link URL.
     *
     * {"type":"string"}
     */
    public function link(string $link) : AddLink
    {
        $this->params['link'] = $link;
        return $this;
    }
    /**
     * Description text.
     *
     * {"type":"string"}
     */
    public function _text(string $_text) : AddLink
    {
        $this->params['_text'] = $_text;
        return $this;
    }
}