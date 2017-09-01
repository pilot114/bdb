<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Apps
{
    public function getCatalog() : Method\GetCatalog
    {
        return new Method\GetCatalog();
    }
    public function get() : Method\Get
    {
        return new Method\Get();
    }
    public function sendRequest() : Method\SendRequest
    {
        return new Method\SendRequest();
    }
    public function deleteAppRequests() : Method\DeleteAppRequests
    {
        return new Method\DeleteAppRequests();
    }
    public function getFriendsList() : Method\GetFriendsList
    {
        return new Method\GetFriendsList();
    }
    public function getLeaderboard() : Method\GetLeaderboard
    {
        return new Method\GetLeaderboard();
    }
    public function getScore() : Method\GetScore
    {
        return new Method\GetScore();
    }
}