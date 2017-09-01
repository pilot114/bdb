<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Likes
{
    public function getList() : Method\GetList
    {
        return new Method\GetList();
    }
    public function add() : Method\Add
    {
        return new Method\Add();
    }
    public function delete() : Method\Delete
    {
        return new Method\Delete();
    }
    public function isLiked() : Method\IsLiked
    {
        return new Method\IsLiked();
    }
}