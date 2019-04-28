<?php

include './vendor/autoload.php';

$accessToken = file_get_contents('at.txt');
$vk = new \VkApigen\Api($accessToken);

$response = $vk->users()->search()
    ->_city(99)
    ->_university_faculty(6002)
    ->_university_year(2013)
    ->_count(100)
    ->call();

$result = json_decode((string)$response->getBody());
foreach ($result->response->items as $item) {
    echo $item->first_name . ' ' . $item->last_name . " " . $item->id . "\n";
}
