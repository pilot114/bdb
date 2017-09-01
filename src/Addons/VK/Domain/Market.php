<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Market
{
    public function get() : Method\Get
    {
        return new Method\Get();
    }
    public function getById() : Method\GetById
    {
        return new Method\GetById();
    }
    public function search() : Method\Search
    {
        return new Method\Search();
    }
    public function getAlbums() : Method\GetAlbums
    {
        return new Method\GetAlbums();
    }
    public function getAlbumById() : Method\GetAlbumById
    {
        return new Method\GetAlbumById();
    }
    public function createComment() : Method\CreateComment
    {
        return new Method\CreateComment();
    }
    public function getComments() : Method\GetComments
    {
        return new Method\GetComments();
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
    public function reportComment() : Method\ReportComment
    {
        return new Method\ReportComment();
    }
    public function getCategories() : Method\GetCategories
    {
        return new Method\GetCategories();
    }
    public function report() : Method\Report
    {
        return new Method\Report();
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
    public function restore() : Method\Restore
    {
        return new Method\Restore();
    }
    public function reorderItems() : Method\ReorderItems
    {
        return new Method\ReorderItems();
    }
    public function reorderAlbums() : Method\ReorderAlbums
    {
        return new Method\ReorderAlbums();
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
    public function removeFromAlbum() : Method\RemoveFromAlbum
    {
        return new Method\RemoveFromAlbum();
    }
    public function addToAlbum() : Method\AddToAlbum
    {
        return new Method\AddToAlbum();
    }
}