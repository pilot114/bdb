<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns HTML representation of the wiki markup.
 */
class Pages_ParseWiki extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('pages.parseWiki');
    }
    /**
     * Text of the wiki page.
     *
     * {"type":"string"}
     */
    public function text(string $text) : Pages_ParseWiki
    {
        $this->params['text'] = $text;
        return $this;
    }
    /**
     * ID of the group in the context of which this markup is interpreted.;
     *
     * {"type":"int","minimum":0}
     */
    public function _group_id(int $group_id) : Pages_ParseWiki
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}