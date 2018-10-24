## Create

Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\FileGeneratorManager;

$manager = new FileGeneratorManager();
```

Create a new [entity](model.md)

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

$result = $manager->create($params);
```

Check the result of the operation

```php
if ($result->ok()) {
    // All ok
} else {
    // Something goes wrong
}
```

Retrieve the [entity](model.md) from the [result](result.md)

```php
$entity = $result->getResource();
```

Throw an exception immediately if the operation fails

```php
use Railken\Lem\Exceptions\Exception;

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
   
try {
    $result = $manager->createOrFail($params);
} catch (Exception $e) {
    // ...
}
```

### Links
* [Attributes](attributes.md)
* [Errors](errors.md)
* [Handle the result](result.md)

---
[Back](index.md)