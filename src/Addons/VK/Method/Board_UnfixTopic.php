<?php

namespace Bdb\Addons\VK\Method;

/**
 * Unpins a pinned topic from the top of a community's discussion board.
 */
class Board_UnfixTopic extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('board.unfixTopic');
    }
    /**
     * ID of the community that owns the discussion board.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : Board_UnfixTopic
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Topic ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function topic_id(integer $topic_id) : Board_UnfixTopic
    {
        $this->params['topic_id'] = $topic_id;
        return $this;
    }
}