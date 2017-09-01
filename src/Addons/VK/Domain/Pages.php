<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Pages
{
    public function get() : Method\Get
    {
        return new Method\Get();
    }
    public function save() : Method\Save
    {
        return new Method\Save();
    }
    public function saveAccess() : Method\SaveAccess
    {
        return new Method\SaveAccess();
    }
    public function getHistory() : Method\GetHistory
    {
        return new Method\GetHistory();
    }
    public function getTitles() : Method\GetTitles
    {
        return new Method\GetTitles();
    }
    public function getVersion() : Method\GetVersion
    {
        return new Method\GetVersion();
    }
    public function parseWiki() : Method\ParseWiki
    {
        return new Method\ParseWiki();
    }
    public function clearCache() : Method\ClearCache
    {
        return new Method\ClearCache();
    }
}