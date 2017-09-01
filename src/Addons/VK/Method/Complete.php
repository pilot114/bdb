<?php

namespace Bdb\Addons\VK\Method;

/**
 * Completes the lead started by user.
 */
class Complete
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    /**
     * Session obtained as GET parameter when session started.
     *
     * {"type":"string"}
     */
    public function vk_sid(string $vk_sid) : Complete
    {
        $this->params['vk_sid'] = $vk_sid;
        return $this;
    }
    /**
     * Secret key from the lead testing interface.
     *
     * {"type":"string"}
     */
    public function secret(string $secret) : Complete
    {
        $this->params['secret'] = $secret;
        return $this;
    }
    /**
     * Comment text.
     *
     * {"type":"string"}
     */
    public function _comment(string $_comment) : Complete
    {
        $this->params['_comment'] = $_comment;
        return $this;
    }
}