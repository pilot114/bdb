<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns players rating in the game.
 */
class GetLeaderboard
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Leaderboard type. Possible values:; *'level' — by level;; *'points' — by mission points;; *'score' — by score ().
     *
     * {"type":"string","enum":["level","points","score"]}
     */
    public function type(string $type) : GetLeaderboard
    {
        $this->params['type'] = $type;
        return $this;
    }
    /**
     * Rating type. Possible values:; *'1' — global rating among all players;; *'0' — rating among user friends.
     *
     * {"type":"boolean","default":1}
     */
    public function _global(boolean $_global) : GetLeaderboard
    {
        $this->params['_global'] = $_global;
        return $this;
    }
    /**
     * 1 — to return additional info about users
     *
     * {"type":"boolean"}
     */
    public function _extended(boolean $_extended) : GetLeaderboard
    {
        $this->params['_extended'] = $_extended;
        return $this;
    }
}