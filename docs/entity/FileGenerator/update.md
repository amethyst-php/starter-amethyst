## Update 


Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\FileGeneratorManager;

$manager = new FileGeneratorManager();
```

Retrieve an [entity](model.md) using the [repository](repository.md)


```php
$entity = $manager->getRepository()->findOneById(1);
```

Update an existent [entity](model.md)

```php
$params = [
    "name" => "Bernadette Gibson",
    "description" => "Fugiat quis laborum dolor dolore suscipit maiores sed magni. Minima qui molestias ipsa. Possimus et culpa laborum nihil quod quidem.",
    "data_builder" => [
        "name" => "Dr. Elliott Durgan Sr.",
        "description" => "Minus blanditiis odit aut quae harum voluptatem. Maxime eum et expedita omnis error. Voluptatum numquam necessitatibus explicabo.",
        "class_name" => "Railken\\Amethyst\\DataBuilders\\DummyDataBuilder",
        "filter" => "id eq 1",
        "input" => [
            "date" => [
                "type" => "date",
                "validation" => "date_format:Y-m-d"
            ]
        ],
        "mock_data" => [
            "date" => "2018-01-01"
        ],
        "data_builder" => [
            "class_name" => "Railken\\Amethyst\\DataBuilders\\FileGeneratorDataBuilder"
        ]
    ],
    "filename" => "users-{{ \"now\"|date(\"Ymd\") }}",
    "filetype" => "text/plain",
    "body" => "test"
];

$result = $manager->update($params);
```

* [Attributes](attributes.md)
* [Errors](errors.md)
* [Performing queries with the Repository](repository.md)
* [Handle the result](result.md)

---
[Back](index.md)