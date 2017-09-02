<?php

include './vendor/autoload.php';

// all permissions for my app
// https://oauth.vk.com/authorize?client_id=4664424&display=page&redirect_uri=https://oauth.vk.com/blank.html&scope=268435455&response_type=token&v=5.52

$accessToken = file_get_contents('at.txt');
$vk = new \Bdb\Addons\VK\Api($accessToken);

$response = $vk->friends()->get()->_fields(['first_name', 'last_name', 'nickname', 'sex', 'bdate', 'city', 'country', 'rate'])->call();

$result = json_decode((string)$response->getBody());
dump($result);
