<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns players rating in the game.
 */
class Apps_GetLeaderboard extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('apps.getLeaderboard');
    }
    /**
     * Leaderboard type. Possible values:; *'level' — by level;; *'points' — by mission points;; *'score' — by score ().
     *
     * {"type":"string","enum":["level","points","score"]}
     */
    public function type(string $type) : Apps_GetLeaderboard
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * Rating type. Possible values:; *'1' — global rating among all players;; *'0' — rating among user friends.
     *
     * {"type":"boolean","default":1}
     */
    public function _global(boolean $global) : Apps_GetLeaderboard
    {
        $this->params['global'] = $global;
        return $this;
    }
    /**
     * 1 — to return additional info about users
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $extended) : Apps_GetLeaderboard
    {
        $this->params['extended'] = $extended;
        return $this;
    }
}