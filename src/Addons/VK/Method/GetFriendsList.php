<?php

namespace Bdb\Addons\VK\Method;

/**
 * Creates friends list for requests and invites in current app.
 */
class GetFriendsList
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * List size.
     *
     * {"type":"integer","minimum":0,"default":20,"maximum":5000}
     */
    public function _count(integer $_count) : GetFriendsList
    {
        $this->params['_count'] = $_count;
        return $this;
    }
    /**
     * List type. Possible values:; * 'invite' — available for invites (don't play the game);; * 'request' — available for request (play the game).; ; By default: 'invite'.
     *
     * {"type":"string","default":"invite","enum":["request","invite"]}
     */
    public function _type(string $_type) : GetFriendsList
    {
        $this->params['_type'] = $_type;
        return $this;
    }
    /**
     * Additional profile fields, see [vk.com/dev/fields|description].
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $_fields) : GetFriendsList
    {
        $this->params['_fields'] = $_fields;
        return $this;
    }
}