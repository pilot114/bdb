<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Photos
{
    public function createAlbum() : Method\CreateAlbum
    {
        return new Method\CreateAlbum();
    }
    public function editAlbum() : Method\EditAlbum
    {
        return new Method\EditAlbum();
    }
    public function getAlbums() : Method\GetAlbums
    {
        return new Method\GetAlbums();
    }
    public function get() : Method\Get
    {
        return new Method\Get();
    }
    public function getAlbumsCount() : Method\GetAlbumsCount
    {
        return new Method\GetAlbumsCount();
    }
    public function getById() : Method\GetById
    {
        return new Method\GetById();
    }
    public function getUploadServer() : Method\GetUploadServer
    {
        return new Method\GetUploadServer();
    }
    public function getOwnerPhotoUploadServer() : Method\GetOwnerPhotoUploadServer
    {
        return new Method\GetOwnerPhotoUploadServer();
    }
    public function getChatUploadServer() : Method\GetChatUploadServer
    {
        return new Method\GetChatUploadServer();
    }
    public function getMarketUploadServer() : Method\GetMarketUploadServer
    {
        return new Method\GetMarketUploadServer();
    }
    public function getMarketAlbumUploadServer() : Method\GetMarketAlbumUploadServer
    {
        return new Method\GetMarketAlbumUploadServer();
    }
    public function saveMarketPhoto() : Method\SaveMarketPhoto
    {
        return new Method\SaveMarketPhoto();
    }
    public function saveMarketAlbumPhoto() : Method\SaveMarketAlbumPhoto
    {
        return new Method\SaveMarketAlbumPhoto();
    }
    public function saveOwnerPhoto() : Method\SaveOwnerPhoto
    {
        return new Method\SaveOwnerPhoto();
    }
    public function saveWallPhoto() : Method\SaveWallPhoto
    {
        return new Method\SaveWallPhoto();
    }
    public function getWallUploadServer() : Method\GetWallUploadServer
    {
        return new Method\GetWallUploadServer();
    }
    public function getMessagesUploadServer() : Method\GetMessagesUploadServer
    {
        return new Method\GetMessagesUploadServer();
    }
    public function saveMessagesPhoto() : Method\SaveMessagesPhoto
    {
        return new Method\SaveMessagesPhoto();
    }
    public function report() : Method\Report
    {
        return new Method\Report();
    }
    public function reportComment() : Method\ReportComment
    {
        return new Method\ReportComment();
    }
    public function search() : Method\Search
    {
        return new Method\Search();
    }
    public function save() : Method\Save
    {
        return new Method\Save();
    }
    public function copy() : Method\Copy
    {
        return new Method\Copy();
    }
    public function edit() : Method\Edit
    {
        return new Method\Edit();
    }
    public function move() : Method\Move
    {
        return new Method\Move();
    }
    public function makeCover() : Method\MakeCover
    {
        return new Method\MakeCover();
    }
    public function reorderAlbums() : Method\ReorderAlbums
    {
        return new Method\ReorderAlbums();
    }
    public function reorderPhotos() : Method\ReorderPhotos
    {
        return new Method\ReorderPhotos();
    }
    public function getAll() : Method\GetAll
    {
        return new Method\GetAll();
    }
    public function getUserPhotos() : Method\GetUserPhotos
    {
        return new Method\GetUserPhotos();
    }
    public function deleteAlbum() : Method\DeleteAlbum
    {
        return new Method\DeleteAlbum();
    }
    public function delete() : Method\Delete
    {
        return new Method\Delete();
    }
    public function restore() : Method\Restore
    {
        return new Method\Restore();
    }
    public function confirmTag() : Method\ConfirmTag
    {
        return new Method\ConfirmTag();
    }
    public function getComments() : Method\GetComments
    {
        return new Method\GetComments();
    }
    public function getAllComments() : Method\GetAllComments
    {
        return new Method\GetAllComments();
    }
    public function createComment() : Method\CreateComment
    {
        return new Method\CreateComment();
    }
    public function deleteComment() : Method\DeleteComment
    {
        return new Method\DeleteComment();
    }
    public function restoreComment() : Method\RestoreComment
    {
        return new Method\RestoreComment();
    }
    public function editComment() : Method\EditComment
    {
        return new Method\EditComment();
    }
    public function getTags() : Method\GetTags
    {
        return new Method\GetTags();
    }
    public function putTag() : Method\PutTag
    {
        return new Method\PutTag();
    }
    public function removeTag() : Method\RemoveTag
    {
        return new Method\RemoveTag();
    }
    public function getNewTags() : Method\GetNewTags
    {
        return new Method\GetNewTags();
    }
}