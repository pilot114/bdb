<?php

namespace Bdb\Addons\VK\Method;

/**
 * Approves or creates a friend request.
 */
class Friends_Add extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('friends.add');
    }
    /**
     * ID of the user whose friend request will be approved or to whom a friend request will be sent.
     *
     * {"type":"int","minimum":0}
     */
    public function user_id(int $user_id) : Friends_Add
    {
        $this->params['user_id'] = $user_id;
        return $this;
    }
    /**
     * Text of the message (up to 500 characters) for the friend request, if any.
     *
     * {"type":"string","maxLength":500}
     */
    public function _text(string $text) : Friends_Add
    {
        $this->params['text'] = $text;
        return $this;
    }
    /**
     * '1' to pass an incoming request to followers list.
     *
     * {"type":"boolean"}
     */
    public function _follow(boolean $follow) : Friends_Add
    {
        $this->params['follow'] = $follow;
        return $this;
    }
}