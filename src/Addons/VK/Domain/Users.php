<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Users
{
    public function get() : Method\Get
    {
        return new Method\Get();
    }
    public function search() : Method\Search
    {
        return new Method\Search();
    }
    public function isAppUser() : Method\IsAppUser
    {
        return new Method\IsAppUser();
    }
    public function getSubscriptions() : Method\GetSubscriptions
    {
        return new Method\GetSubscriptions();
    }
    public function getFollowers() : Method\GetFollowers
    {
        return new Method\GetFollowers();
    }
    public function report() : Method\Report
    {
        return new Method\Report();
    }
    public function getNearby() : Method\GetNearby
    {
        return new Method\GetNearby();
    }
}