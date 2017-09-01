<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Newsfeed
{
    public function get() : Method\Get
    {
        return new Method\Get();
    }
    public function getRecommended() : Method\GetRecommended
    {
        return new Method\GetRecommended();
    }
    public function getComments() : Method\GetComments
    {
        return new Method\GetComments();
    }
    public function getMentions() : Method\GetMentions
    {
        return new Method\GetMentions();
    }
    public function getBanned() : Method\GetBanned
    {
        return new Method\GetBanned();
    }
    public function addBan() : Method\AddBan
    {
        return new Method\AddBan();
    }
    public function deleteBan() : Method\DeleteBan
    {
        return new Method\DeleteBan();
    }
    public function ignoreItem() : Method\IgnoreItem
    {
        return new Method\IgnoreItem();
    }
    public function unignoreItem() : Method\UnignoreItem
    {
        return new Method\UnignoreItem();
    }
    public function search() : Method\Search
    {
        return new Method\Search();
    }
    public function getLists() : Method\GetLists
    {
        return new Method\GetLists();
    }
    public function saveList() : Method\SaveList
    {
        return new Method\SaveList();
    }
    public function deleteList() : Method\DeleteList
    {
        return new Method\DeleteList();
    }
    public function unsubscribe() : Method\Unsubscribe
    {
        return new Method\Unsubscribe();
    }
    public function getSuggestedSources() : Method\GetSuggestedSources
    {
        return new Method\GetSuggestedSources();
    }
}