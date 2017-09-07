<?php

include './vendor/autoload.php';

$accessToken = file_get_contents('at.txt');
$vk = new \Bdb\Addons\VK\Api($accessToken);

$response = $vk->users()->get()
    ->_user_ids(range(1,10))
    ->call();

$result = json_decode((string)$response->getBody());
dump($result);
