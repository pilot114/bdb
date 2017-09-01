<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Audio
{
    public function get() : Method\Get
    {
        return new Method\Get();
    }
    public function getById() : Method\GetById
    {
        return new Method\GetById();
    }
    public function getLyrics() : Method\GetLyrics
    {
        return new Method\GetLyrics();
    }
    public function search() : Method\Search
    {
        return new Method\Search();
    }
    public function getUploadServer() : Method\GetUploadServer
    {
        return new Method\GetUploadServer();
    }
    public function save() : Method\Save
    {
        return new Method\Save();
    }
    public function add() : Method\Add
    {
        return new Method\Add();
    }
    public function delete() : Method\Delete
    {
        return new Method\Delete();
    }
    public function edit() : Method\Edit
    {
        return new Method\Edit();
    }
    public function reorder() : Method\Reorder
    {
        return new Method\Reorder();
    }
    public function restore() : Method\Restore
    {
        return new Method\Restore();
    }
    public function getAlbums() : Method\GetAlbums
    {
        return new Method\GetAlbums();
    }
    public function addAlbum() : Method\AddAlbum
    {
        return new Method\AddAlbum();
    }
    public function editAlbum() : Method\EditAlbum
    {
        return new Method\EditAlbum();
    }
    public function deleteAlbum() : Method\DeleteAlbum
    {
        return new Method\DeleteAlbum();
    }
    public function moveToAlbum() : Method\MoveToAlbum
    {
        return new Method\MoveToAlbum();
    }
    public function setBroadcast() : Method\SetBroadcast
    {
        return new Method\SetBroadcast();
    }
    public function getBroadcastList() : Method\GetBroadcastList
    {
        return new Method\GetBroadcastList();
    }
    public function getRecommendations() : Method\GetRecommendations
    {
        return new Method\GetRecommendations();
    }
    public function getPopular() : Method\GetPopular
    {
        return new Method\GetPopular();
    }
    public function getCount() : Method\GetCount
    {
        return new Method\GetCount();
    }
}