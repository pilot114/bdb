<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Places
{
    public function add() : Method\Add
    {
        return new Method\Add();
    }
    public function getById() : Method\GetById
    {
        return new Method\GetById();
    }
    public function search() : Method\Search
    {
        return new Method\Search();
    }
    public function checkin() : Method\Checkin
    {
        return new Method\Checkin();
    }
    public function getCheckins() : Method\GetCheckins
    {
        return new Method\GetCheckins();
    }
    public function getTypes() : Method\GetTypes
    {
        return new Method\GetTypes();
    }
}