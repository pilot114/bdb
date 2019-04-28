Аналитические запросы - каждый может применятся как к коллекции,
так и к результату другой выборки

# common

- Кол-во
Группы (выборка и кол-во)
- по времени добавления (по дням) - ОТСУТСТВУЕТ
- по обновлениям (по дням)- ОТСУТСТВУЕТ
- по фамилиям (last_name)
    
    db.getCollection('common').aggregate([
        {$group : {_id:"$last_name", count:{$sum:1}}},
        {$sort:{count:-1}}
    ])

- по году рождения (bdate)
- по времени последнего захода (last_seen.time)

    db.getCollection('common').aggregate([
        {$group : {_id:"$last_seen.time", count:{$sum:1}, ids: { $push: "$id"}}},
        {$sort:{count:-1}}
    ])

- по кол-ву подписчиков (followers_count)

    db.getCollection('common').aggregate([
        {$group : {_id:"$followers_count", count:{$sum:1}, ids: { $push: "$id"}}},
        {$sort:{count:1}}
    ])

- по ВУЗам (universities - array)
- выборки по заполненым опциональным полям (религия, интересы и пр.)
