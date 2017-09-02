<?php

namespace Bdb\Addons\VK\Method;

/**
 * Creates and edits user newsfeed lists
 */
class Newsfeed_SaveList extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('newsfeed.saveList');
    }
    /**
     * numeric list identifier (if not sent, will be set automatically).
     *
     * {"type":"integer","minimum":0}
     */
    public function _list_id(integer $list_id) : Newsfeed_SaveList
    {
        $this->params['list_id'] = $list_id;
        return $this;
    }
    /**
     * list name.
     *
     * {"type":"string"}
     */
    public function title(string $title) : Newsfeed_SaveList
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * users and communities identifiers to be added to the list. Community identifiers must be negative numbers.
     *
     * {"type":"array","items":{"type":"integer"}}
     */
    public function _source_ids(array $source_ids) : Newsfeed_SaveList
    {
        $this->params['source_ids'] = $source_ids;
        return $this;
    }
    /**
     * reposts display on and off ('1' is for off).
     *
     * {"type":"boolean"}
     */
    public function _no_reposts(boolean $no_reposts) : Newsfeed_SaveList
    {
        $this->params['no_reposts'] = $no_reposts;
        return $this;
    }
}