<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Polls
{
    public function getById() : Method\GetById
    {
        return new Method\GetById();
    }
    public function addVote() : Method\AddVote
    {
        return new Method\AddVote();
    }
    public function deleteVote() : Method\DeleteVote
    {
        return new Method\DeleteVote();
    }
    public function getVoters() : Method\GetVoters
    {
        return new Method\GetVoters();
    }
    public function create() : Method\Create
    {
        return new Method\Create();
    }
    public function edit() : Method\Edit
    {
        return new Method\Edit();
    }
}