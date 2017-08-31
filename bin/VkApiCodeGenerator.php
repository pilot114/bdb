<?php

include './vendor/autoload.php';

$methods = json_decode(file_get_contents('./vendor/vkcom/vk-api-schema/methods.json'));

$n = new \Bdb\Addons\VkApi\Normalizer\VkApiNormalizer();
$n->setDenormalizer(new \Bdb\Addons\VkApi\Normalizer\VkApiNormalizer());
$obj = $n->denormalize($methods, 'Bdb\\Addons\\VkApi\\Model\\VkApi', 'json');

var_dump($obj->getErrors());
die();

//$vkApi = new Bdb\Addons\VkApi\Model\VkApi();
//var_dump($vkApi->setMethods());
//die();
