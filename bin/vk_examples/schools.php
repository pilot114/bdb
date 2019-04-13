<?php

include './vendor/autoload.php';

$accessToken = file_get_contents('at.txt');
$vk = new \Bdb\Addons\VK\Api($accessToken);

function getUsersForFiveYears($vk, $startYear, $school)
{

    $code = sprintf('
var result = {count:0,real_count:0, items:[]};
var year = %s;
var year_limit = year + 5;

while (year < year_limit) {
    year = year + 1;
    var res = API.users.search({
    fields: "bdate,photo_200_orig,activities,interests,personal,quotes,music,movies,tv,books,games,relatives,relation,last_seen,followers_count,career,military,occupation,universities,schools,connections,exports",
    count:900,city:99,school_year:year,school:%s});
    result.count = result.count + res.count;
    result.real_count = result.real_count + res.items.length;
    result.items.push(res.items);
};
return result;
', $startYear, $school);

    $code = trim($code);

    $response = $vk->execute()
        ->code($code)
        ->call();
    $result = json_decode((string)$response->getBody(), true)['response'];
    $result['items'] = array_reduce($result['items'], function ($carry, $item) {
        return array_merge($carry, $item);
    }, []);

    return $result;
}

function bulkInsert($users)
{
    $collection = (new MongoDB\Client('mongodb://mongo/'))->vk_users->common;
    $collection->insertMany($users);
}

function addSchool($schoolId)
{
    $collection = (new MongoDB\Client('mongodb://mongo/'))->vk_users->counters;
    $collection->updateOne(
        ['type' => 'school'],
        ['$push' => ['school' => $schoolId], '$set' => ['type' => 'school']],
        ['upsert' => true]
    );
}

function checkSchool($schoolId)
{
    $collection = (new MongoDB\Client('mongodb://mongo/'))->vk_users->counters;
    $result = $collection->findOne(['school' => $schoolId]);
    return $result;
}


$response = $vk->database()->getSchools()
    ->city_id(99)
    ->_count(1000)
    ->call();

$result = json_decode((string)$response->getBody());

foreach ($result->response->items as $school) {

    if (checkSchool($school->id)) {
        continue;
    }

    $schoolName = $school->title;

    echo sprintf("\nШкола: %s (%s)\n", $schoolName, $school->id);

    foreach (['1990', '1995', '2000', '2005', '2010', '2015', '2020'] as $year) {
        sleep(rand(5, 30));

        $result = getUsersForFiveYears($vk, $year, $school->id);

        echo sprintf("(%s-%s) %s ", $year, $year + 4, $result['real_count']);

        if (isset($result['items']) && $result['items']) {
            bulkInsert($result['items']);
        }
    }

    addSchool($school->id);

    echo sprintf("sleep 2 min...\n");
    sleep(60 * 2);
}
echo sprintf("Done\n");
