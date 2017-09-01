<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Fave
{
    public function getUsers() : Method\GetUsers
    {
        return new Method\GetUsers();
    }
    public function getPhotos() : Method\GetPhotos
    {
        return new Method\GetPhotos();
    }
    public function getPosts() : Method\GetPosts
    {
        return new Method\GetPosts();
    }
    public function getVideos() : Method\GetVideos
    {
        return new Method\GetVideos();
    }
    public function getLinks() : Method\GetLinks
    {
        return new Method\GetLinks();
    }
    public function getMarketItems() : Method\GetMarketItems
    {
        return new Method\GetMarketItems();
    }
    public function addUser() : Method\AddUser
    {
        return new Method\AddUser();
    }
    public function removeUser() : Method\RemoveUser
    {
        return new Method\RemoveUser();
    }
    public function addGroup() : Method\AddGroup
    {
        return new Method\AddGroup();
    }
    public function removeGroup() : Method\RemoveGroup
    {
        return new Method\RemoveGroup();
    }
    public function addLink() : Method\AddLink
    {
        return new Method\AddLink();
    }
    public function removeLink() : Method\RemoveLink
    {
        return new Method\RemoveLink();
    }
}