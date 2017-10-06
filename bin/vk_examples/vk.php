<?php

include './vendor/autoload.php';

$accessToken = file_get_contents('at.txt');
$vk = new \Bdb\Addons\VK\Api($accessToken);

//university идентификатор ВУЗа.
//положительное число
//university_year год окончания ВУЗа.
//положительное число
//university_faculty идентификатор факультета.
//положительное число
//university_chair идентификатор кафедры.
//положительное число

//school_country идентификатор страны, в которой пользователи закончили школу.
//положительное число
//school_city идентификатор города, в котором пользователи закончили школу.
//положительное число
//school_class буква класса.
//положительное число
//school идентификатор школы, которую закончили пользователи.
//положительное число
//school_year

//company название компании, в которой работают пользователи.
//строка
//position название должности.
//строка

//interests интересы.
//строка
//group_id идентификатор группы, среди пользователей которой необходимо проводить поиск.
//положительное число
//from_list Разделы среди которых нужно осуществить поиск, перечисленные через запятую. Возможные значения:
//friends — искать среди друзей;
//subscriptions — искать среди друзей и подписок пользователя.
//список слов, разделенных через запятую
//birth_year год рождения.
//положительное число


$response = $vk->users()->search()
// 1 - by regDate 0 - popular
//    ->_sort()
    ->_offset(0)
    ->_count(1)
	->_city(99)
	->_fields([
		'bdate', 'photo_200_orig', 'screen_name', 'about', 'contacts', 'site',

        'activities', // Деятельность
        'interests', // интересы
        'personal', // миовоззрение и пр.
        'quotes',
        'music',
        'movies',
        'tv',
        'books',
        'games',

        'relatives', // родственники
        'relation', // семейное положение
        'last_seen',
        'followers_count',

        'career',
        'military',
        'occupation', // место работы
        'universities',
        'schools',

        'connections', // другие соц сети
        'exports', // куда настроен экспорт (тоже соц сети)
	])
    ->_q('Иван Петров')
    ->call();

$result = json_decode((string)$response->getBody());

$count = $result->response->count;
$users = $result->response->items;

dump($users);
