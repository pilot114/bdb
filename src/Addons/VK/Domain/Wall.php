<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Wall
{
    public function get() : Method\Get
    {
        return new Method\Get();
    }
    public function search() : Method\Search
    {
        return new Method\Search();
    }
    public function getById() : Method\GetById
    {
        return new Method\GetById();
    }
    public function post() : Method\Post
    {
        return new Method\Post();
    }
    public function repost() : Method\Repost
    {
        return new Method\Repost();
    }
    public function getReposts() : Method\GetReposts
    {
        return new Method\GetReposts();
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
    public function pin() : Method\Pin
    {
        return new Method\Pin();
    }
    public function unpin() : Method\Unpin
    {
        return new Method\Unpin();
    }
    public function getComments() : Method\GetComments
    {
        return new Method\GetComments();
    }
    public function createComment() : Method\CreateComment
    {
        return new Method\CreateComment();
    }
    public function editComment() : Method\EditComment
    {
        return new Method\EditComment();
    }
    public function deleteComment() : Method\DeleteComment
    {
        return new Method\DeleteComment();
    }
    public function restoreComment() : Method\RestoreComment
    {
        return new Method\RestoreComment();
    }
    public function reportPost() : Method\ReportPost
    {
        return new Method\ReportPost();
    }
    public function reportComment() : Method\ReportComment
    {
        return new Method\ReportComment();
    }
}