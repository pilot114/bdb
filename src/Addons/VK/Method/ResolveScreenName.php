<?php

namespace Bdb\Addons\VK\Method;

/**
 * Detects a type of object (e.g., user, community, application) and its ID by screen name.
 */
class ResolveScreenName
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    /**
     * Screen name of the user, community (e.g., 'apiclub,' 'andrew', or 'rules_of_war'), or application.
     *
     * {"type":"string"}
     */
    public function screen_name(string $screen_name) : ResolveScreenName
    {
        $this->params['screen_name'] = $screen_name;
        return $this;
    }
}