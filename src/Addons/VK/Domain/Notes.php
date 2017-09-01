<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Notes
{
    public function get() : Method\Get
    {
        return new Method\Get();
    }
    public function getById() : Method\GetById
    {
        return new Method\GetById();
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
}