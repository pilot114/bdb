<?php

include './vendor/autoload.php';

$accessToken = file_get_contents('at.txt');
$vk = new \VkApigen\Api($accessToken);

function getFriends($vk, $users)
{
    $uids = implode(',', array_column($users, 'id'));

    echo sprintf("getFriends. uids: %s\n", $uids);

    $code = sprintf('
var uids = [%s];
var result = [];
var uid = 0;

while (uid = uids.pop()) {
    var res = API.friends.get({
    fields: "bdate,photo_200_orig,activities,interests,personal,quotes,music,movies,tv,books,games,relatives,relation,last_seen,followers_count,career,military,occupation,universities,schools,connections,exports",
    user_id:uid,
    count: 4500});
    var userInfo = {uid:uid, friends:res.items};
    result.push(userInfo);
};
return result;
', $uids);

    $code = trim($code);

    $response = $vk->execute()
        ->code($code)
        ->call();

    $res = json_decode((string)$response->getBody(), true);

    if (!isset($res['response'])) {
        throw new Exception(json_encode($res['error']));
    }

    echo sprintf("getFriends. return count: %s\n", count($res['response']));
    return $res['response'];
}

function addFriend($userId)
{
    $collection = (new MongoDB\Client('mongodb://mongo/'))->vk_users->counters;
    $collection->updateOne(
        ['type' => 'friend'],
        ['$push' => ['friend' => $userId], '$set' => ['type' => 'friend']],
        ['upsert' => true]
    );
}

function filterFindFriends($users)
{
    $collection = (new MongoDB\Client('mongodb://mongo/'))->vk_users->counters;
    $onlyNotFind = [];
    foreach ($users as $user) {
        if (!$collection->findOne(['friend' => $user->id])) {
            $onlyNotFind[] = $user;
        }
    }
    return $onlyNotFind;
}

function bulkInsert($users)
{
    $collection = (new MongoDB\Client('mongodb://mongo/'))->vk_users->friends;
    try {
        $collection->insertMany($users, ['ordered' => false]);
    } catch (MongoDB\Driver\Exception\BulkWriteException $e) {
        // ignore try insert dublicates
    }
}

function updateUserMeta($userId, $friendsIds)
{
    $collection = (new MongoDB\Client('mongodb://mongo/'))->vk_users->common;
    $collection->updateOne(
        ['id' => $userId],
        ['$set' => ['meta.friends_ids' => $friendsIds]]
    );
}

function prepareBatchUsers(\VkApigen\Api $vk, $users)
{
    // чтобы не начинать сначала
    $users = filterFindFriends($users);
    if (count($users) == 0) {
        echo sprintf("all friends already find!\n");
        return;
    }

    $retry = true;
    while ($retry) {
        try {
            // [['uid' => uid, 'friends' => friends]]
            $users = getFriends($vk, $users);
            $retry = false;
        } catch (\Exception $e) {
            echo sprintf("Произошла ошибка при обращении к vk api: %s", $e->getMessage());
            sleep(300);

            // TODO: если ошибка "response size is too big" - идём дальше
            // $retry = false;
        }
    }

    foreach ($users as $user) {
        echo sprintf("User: %s, count friends: %s\n", $user['uid'], count($user['friends']));

        // обновляем каунтеры
//        $start = time();
        addFriend($user['uid']);
//        echo sprintf("Время на обновление каунтеров: %s", time() - $start);

        $friendsIds = [];

        if (count($user['friends']) > 0) {
            $friendsIds = array_column($user['friends'], 'id');
            // добавляем новых пользователей в коллекцию friends
            bulkInsert($user['friends']);
        }
        // обновляем связи
        updateUserMeta($user['uid'], $friendsIds);
    }
    sleep(rand(30, 35));
}


$collection = (new MongoDB\Client('mongodb://mongo/'))->vk_users->common;

$total = $collection->countDocuments();
$offset = 166000;
while ($offset < $total) {
    echo sprintf("offset: %s total: %s\n", $offset, $total);

    if ($offset % 1000 == 0) {
        echo sprintf("ts: %s\n", time());
    }

    $batchUsers = $collection->find([], ['limit' => 4, 'skip' => $offset])->toArray();
    prepareBatchUsers($vk, $batchUsers);
    $offset += 4;
}
echo "Done\n";
