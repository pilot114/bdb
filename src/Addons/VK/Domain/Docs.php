<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Docs
{
    public function get() : Method\Get
    {
        return new Method\Get();
    }
    public function getById() : Method\GetById
    {
        return new Method\GetById();
    }
    public function getUploadServer() : Method\GetUploadServer
    {
        return new Method\GetUploadServer();
    }
    public function getWallUploadServer() : Method\GetWallUploadServer
    {
        return new Method\GetWallUploadServer();
    }
    public function save() : Method\Save
    {
        return new Method\Save();
    }
    public function delete() : Method\Delete
    {
        return new Method\Delete();
    }
    public function add() : Method\Add
    {
        return new Method\Add();
    }
    public function getTypes() : Method\GetTypes
    {
        return new Method\GetTypes();
    }
    public function search() : Method\Search
    {
        return new Method\Search();
    }
    public function edit() : Method\Edit
    {
        return new Method\Edit();
    }
}