<?php

/**
 * Returns detailed information on users.
 */
class Get
{
    private $params = [];

    public function run()
    {
        $this->call('user.get', $this->params);
    }
}