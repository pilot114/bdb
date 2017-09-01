<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Leads
{
    public function complete() : Method\Complete
    {
        return new Method\Complete();
    }
    public function start() : Method\Start
    {
        return new Method\Start();
    }
    public function getStats() : Method\GetStats
    {
        return new Method\GetStats();
    }
    public function getUsers() : Method\GetUsers
    {
        return new Method\GetUsers();
    }
    public function checkUser() : Method\CheckUser
    {
        return new Method\CheckUser();
    }
    public function metricHit() : Method\MetricHit
    {
        return new Method\MetricHit();
    }
}