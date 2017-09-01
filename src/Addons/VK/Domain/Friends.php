<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Friends
{
    public function get() : Method\Get
    {
        return new Method\Get();
    }
    public function getOnline() : Method\GetOnline
    {
        return new Method\GetOnline();
    }
    public function getMutual() : Method\GetMutual
    {
        return new Method\GetMutual();
    }
    public function getRecent() : Method\GetRecent
    {
        return new Method\GetRecent();
    }
    public function getRequests() : Method\GetRequests
    {
        return new Method\GetRequests();
    }
    public function add() : Method\Add
    {
        return new Method\Add();
    }
    public function edit() : Method\Edit
    {
        return new Method\Edit();
    }
    public function delete() : Method\Delete
    {
        return new Method\Delete();
    }
    public function getLists() : Method\GetLists
    {
        return new Method\GetLists();
    }
    public function addList() : Method\AddList
    {
        return new Method\AddList();
    }
    public function editList() : Method\EditList
    {
        return new Method\EditList();
    }
    public function deleteList() : Method\DeleteList
    {
        return new Method\DeleteList();
    }
    public function getAppUsers() : Method\GetAppUsers
    {
        return new Method\GetAppUsers();
    }
    public function getByPhones() : Method\GetByPhones
    {
        return new Method\GetByPhones();
    }
    public function deleteAllRequests() : Method\DeleteAllRequests
    {
        return new Method\DeleteAllRequests();
    }
    public function getSuggestions() : Method\GetSuggestions
    {
        return new Method\GetSuggestions();
    }
    public function areFriends() : Method\AreFriends
    {
        return new Method\AreFriends();
    }
    public function getAvailableForCall() : Method\GetAvailableForCall
    {
        return new Method\GetAvailableForCall();
    }
    public function search() : Method\Search
    {
        return new Method\Search();
    }
}