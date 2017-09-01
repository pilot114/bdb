<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns HTML representation of the wiki markup.
 */
class ParseWiki
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Text of the wiki page.
     *
     * {"type":"string"}
     */
    public function text(string $text) : ParseWiki
    {
        $this->params['text'] = $text;
        return $this;
    }
    /**
     * ID of the group in the context of which this markup is interpreted.;
     *
     * {"type":"integer","minimum":0}
     */
    public function _group_id(integer $_group_id) : ParseWiki
    {
        $this->params['_group_id'] = $_group_id;
        return $this;
    }
}