<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Audio
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function get() : Method\Audio_Get
    {
        return new Method\Audio_Get($this->client, $this->defaultQuery);
    }
    public function getById() : Method\Audio_GetById
    {
        return new Method\Audio_GetById($this->client, $this->defaultQuery);
    }
    public function getLyrics() : Method\Audio_GetLyrics
    {
        return new Method\Audio_GetLyrics($this->client, $this->defaultQuery);
    }
    public function search() : Method\Audio_Search
    {
        return new Method\Audio_Search($this->client, $this->defaultQuery);
    }
    public function getUploadServer() : Method\Audio_GetUploadServer
    {
        return new Method\Audio_GetUploadServer($this->client, $this->defaultQuery);
    }
    public function save() : Method\Audio_Save
    {
        return new Method\Audio_Save($this->client, $this->defaultQuery);
    }
    public function add() : Method\Audio_Add
    {
        return new Method\Audio_Add($this->client, $this->defaultQuery);
    }
    public function delete() : Method\Audio_Delete
    {
        return new Method\Audio_Delete($this->client, $this->defaultQuery);
    }
    public function edit() : Method\Audio_Edit
    {
        return new Method\Audio_Edit($this->client, $this->defaultQuery);
    }
    public function reorder() : Method\Audio_Reorder
    {
        return new Method\Audio_Reorder($this->client, $this->defaultQuery);
    }
    public function restore() : Method\Audio_Restore
    {
        return new Method\Audio_Restore($this->client, $this->defaultQuery);
    }
    public function getAlbums() : Method\Audio_GetAlbums
    {
        return new Method\Audio_GetAlbums($this->client, $this->defaultQuery);
    }
    public function addAlbum() : Method\Audio_AddAlbum
    {
        return new Method\Audio_AddAlbum($this->client, $this->defaultQuery);
    }
    public function editAlbum() : Method\Audio_EditAlbum
    {
        return new Method\Audio_EditAlbum($this->client, $this->defaultQuery);
    }
    public function deleteAlbum() : Method\Audio_DeleteAlbum
    {
        return new Method\Audio_DeleteAlbum($this->client, $this->defaultQuery);
    }
    public function moveToAlbum() : Method\Audio_MoveToAlbum
    {
        return new Method\Audio_MoveToAlbum($this->client, $this->defaultQuery);
    }
    public function setBroadcast() : Method\Audio_SetBroadcast
    {
        return new Method\Audio_SetBroadcast($this->client, $this->defaultQuery);
    }
    public function getBroadcastList() : Method\Audio_GetBroadcastList
    {
        return new Method\Audio_GetBroadcastList($this->client, $this->defaultQuery);
    }
    public function getRecommendations() : Method\Audio_GetRecommendations
    {
        return new Method\Audio_GetRecommendations($this->client, $this->defaultQuery);
    }
    public function getPopular() : Method\Audio_GetPopular
    {
        return new Method\Audio_GetPopular($this->client, $this->defaultQuery);
    }
    public function getCount() : Method\Audio_GetCount
    {
        return new Method\Audio_GetCount($this->client, $this->defaultQuery);
    }
}