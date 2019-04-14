<?php

/**
 * Обновление списка универов, факультетов, и их выпускников
 */

include './vendor/autoload.php';

$accessToken = file_get_contents('at.txt');
$vk = new \VkApigen\Api($accessToken);

function getUsersForFiveYears(\VkApigen\Api $vk, $startYear, $faculty)
{

    $code = sprintf('
var result = {count:0,real_count:0, items:[]};
var year = %s;
var year_limit = year + 5;

while (year < year_limit) {
    year = year + 1;
    var res = API.users.search({
    fields: "bdate,photo_200_orig,activities,interests,personal,quotes,music,movies,tv,books,games,relatives,relation,last_seen,followers_count,career,military,occupation,universities,schools,connections,exports",
    count:900,city:99,university_year:year,university_faculty:%s});
    result.count = result.count + res.count;
    result.real_count = result.real_count + res.items.length;
    result.items.push(res.items);
};
return result;
', $startYear, $faculty);

    $code = trim($code);

    $response = $vk->execute($code);
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

function addFaculty($facultyId)
{
    $collection = (new MongoDB\Client('mongodb://mongo/'))->vk_users->counters;
    $collection->updateOne(
        ['type' => 'faculty'],
        ['$push' => ['faculty' => $facultyId], '$set' => ['type' => 'faculty']],
        ['upsert' => true]
    );
}

function existFaculty($facultyId)
{
    $collection = (new MongoDB\Client('mongodb://mongo/'))->vk_users->counters;
    $result = $collection->findOne(['faculty' => $facultyId]);
    return $result;
}

function addUniversity($universityId)
{
    $collection = (new MongoDB\Client('mongodb://mongo/'))->vk_users->counters;
    $collection->updateOne(
        ['type' => 'university'],
        ['$push' => ['university' => $universityId], '$set' => ['type' => 'university']],
        ['upsert' => true]
    );
}

function existUniversity($universityId)
{
    $collection = (new MongoDB\Client('mongodb://mongo/'))->vk_users->counters;
    $result = $collection->findOne(['university' => $universityId]);
    return $result;
}


$response = $vk->database()->getUniversities()
    ->_city_id(99)
    ->call();

$result = json_decode((string)$response->getBody());

foreach ($result->response->items as $university) {

    if (!existUniversity($university->id)) {
        addUniversity($university->id);
    }

    sleep(rand(5, 30));

    // получаем факультеты универа
    $universityName = $university->title;
    $response = $vk->database()->getFaculties()
        ->university_id($university->id)
        ->call();
    $resultFaculty = json_decode((string)$response->getBody());

    if (empty($resultFaculty->response->items)) {
        echo sprintf("Нет факультетов: %s\n", $universityName);
        continue;
    }

    foreach ($resultFaculty->response->items as $faculty) {

        // если факультет уже есть - идём дальше
        if (existFaculty($faculty->id)) {
            continue;
        }

        sleep(rand(5, 30));

        echo sprintf("\nунивер: %s факультет: %s (%s)\n", $universityName, $faculty->title, $faculty->id);

        foreach (['2000', '2005', '2010', '2015', '2020'] as $year) {
            sleep(rand(5, 30));

            $result = getUsersForFiveYears($vk, $year, $faculty->id);

            echo sprintf("(%s-%s) %s ", $year, $year + 4, $result['real_count']);

            if (isset($result['items']) && $result['items']) {
                bulkInsert($result['items']);
            }
        }

        addFaculty($faculty->id);

        echo sprintf("sleep 10 min...\n");
        sleep(60 * 10);
    }
}
echo sprintf("Done\n");
