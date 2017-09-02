<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Widgets
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function getComments() : Method\Widgets_GetComments
    {
        return new Method\Widgets_GetComments($this->client, $this->defaultQuery);
    }
    public function getPages() : Method\Widgets_GetPages
    {
        return new Method\Widgets_GetPages($this->client, $this->defaultQuery);
    }
}