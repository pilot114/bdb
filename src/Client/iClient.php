<?php

namespace Bdb\Client;

interface iClient
{
    public function downloadData();
    public function filterData($data, $query);
}
