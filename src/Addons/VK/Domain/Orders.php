<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Orders
{
    public function get() : Method\Get
    {
        return new Method\Get();
    }
    public function getById() : Method\GetById
    {
        return new Method\GetById();
    }
    public function changeState() : Method\ChangeState
    {
        return new Method\ChangeState();
    }
    public function getAmount() : Method\GetAmount
    {
        return new Method\GetAmount();
    }
}