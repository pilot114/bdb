<?php

/**
 * перебираем vk_users->common (пары), чтобы найти друзей, затем находим пересечения для них, получаем триплеты
 */

include './vendor/autoload.php';

$accessToken = file_get_contents('at.txt');
$vk = new \VkApigen\Api($accessToken);

$collection = (new MongoDB\Client('mongodb://mongo/'))->vk_users->common;

foreach ($collection->find() as $user) {
    dump($user->meta);
}
