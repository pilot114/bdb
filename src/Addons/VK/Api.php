<?php

namespace Bdb\Addons\VK;

class Api
{
    const VERSION = 5.67;
    protected $authToken;
    public function setAuthToken(string $authToken)
    {
        $this->authToken = $authToken;
    }
    public function users() : Domain\Users
    {
        return new Domain\Users();
    }
    public function auth() : Domain\Auth
    {
        return new Domain\Auth();
    }
    public function wall() : Domain\Wall
    {
        return new Domain\Wall();
    }
    public function photos() : Domain\Photos
    {
        return new Domain\Photos();
    }
    public function friends() : Domain\Friends
    {
        return new Domain\Friends();
    }
    public function widgets() : Domain\Widgets
    {
        return new Domain\Widgets();
    }
    public function secure() : Domain\Secure
    {
        return new Domain\Secure();
    }
    public function storage() : Domain\Storage
    {
        return new Domain\Storage();
    }
    public function orders() : Domain\Orders
    {
        return new Domain\Orders();
    }
    public function status() : Domain\Status
    {
        return new Domain\Status();
    }
    public function audio() : Domain\Audio
    {
        return new Domain\Audio();
    }
    public function leads() : Domain\Leads
    {
        return new Domain\Leads();
    }
    public function pages() : Domain\Pages
    {
        return new Domain\Pages();
    }
    public function groups() : Domain\Groups
    {
        return new Domain\Groups();
    }
    public function board() : Domain\Board
    {
        return new Domain\Board();
    }
    public function video() : Domain\Video
    {
        return new Domain\Video();
    }
    public function notes() : Domain\Notes
    {
        return new Domain\Notes();
    }
    public function places() : Domain\Places
    {
        return new Domain\Places();
    }
    public function account() : Domain\Account
    {
        return new Domain\Account();
    }
    public function messages() : Domain\Messages
    {
        return new Domain\Messages();
    }
    public function newsfeed() : Domain\Newsfeed
    {
        return new Domain\Newsfeed();
    }
    public function likes() : Domain\Likes
    {
        return new Domain\Likes();
    }
    public function polls() : Domain\Polls
    {
        return new Domain\Polls();
    }
    public function docs() : Domain\Docs
    {
        return new Domain\Docs();
    }
    public function fave() : Domain\Fave
    {
        return new Domain\Fave();
    }
    public function notifications() : Domain\Notifications
    {
        return new Domain\Notifications();
    }
    public function stats() : Domain\Stats
    {
        return new Domain\Stats();
    }
    public function search() : Domain\Search
    {
        return new Domain\Search();
    }
    public function apps() : Domain\Apps
    {
        return new Domain\Apps();
    }
    public function utils() : Domain\Utils
    {
        return new Domain\Utils();
    }
    public function database() : Domain\Database
    {
        return new Domain\Database();
    }
    public function gifts() : Domain\Gifts
    {
        return new Domain\Gifts();
    }
    public function ads() : Domain\Ads
    {
        return new Domain\Ads();
    }
    public function market() : Domain\Market
    {
        return new Domain\Market();
    }
}