<?php

include './vendor/autoload.php';

$accessToken = file_get_contents('at.txt');
$vk = new \Bdb\Addons\VK\Api($accessToken);

$response = $vk->users()->search()
	->_city(99)
	->_fields([
		'bdate', 'photo_200_orig', 'lists', 'domain', 'contacts', 'site', 'education', 'universities',
		'schools', 'status', 'last_seen', 'followers_count', 'common_count', 'occupation',
		'nickname', 'relatives', 'relation', 'personal', 'connections', 'exports', 'wall_comments',
		'activities', 'interests', 'music', 'movies', 'tv', 'books', 'games', 'about', 'quotes',
		'can_post', 'can_see_all_posts', 'can_see_audio', 'can_write_private_message', 'can_send_friend_request', 'is_favorite',
		'is_hidden_from_feed', 'timezone', 'screen_name', 'maiden_name', 'is_friend', 'friend_status', 'career', 'military'
	])
    ->_q('Иван Петров')
    ->call();

$result = json_decode((string)$response->getBody());
dump($result);
