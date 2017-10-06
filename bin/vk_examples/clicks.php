<?php

include './vendor/autoload.php';

$accessToken = file_get_contents('at.txt');
$vk = new \Bdb\Addons\VK\Api($accessToken);

$collection = (new MongoDB\Client('mongodb://mongo/'))->vk_users->common;

// перебираем пары из common, чтобы найти друзей, затем находим пересечения для них, получаем триплеты

foreach($collection->find() as $user) {
    dump($user->meta);
}
