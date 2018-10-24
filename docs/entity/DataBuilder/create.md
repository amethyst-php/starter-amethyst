## Create

Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\DataBuilderManager;

$manager = new DataBuilderManager();
```

Create a new [entity](model.md)

```php
$params = [
    "name" => "Mariam Keebler",
    "description" => "Libero provident nobis cupiditate omnis officiis sequi. Non similique sed eaque rerum.",
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
    ]
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
    "name" => "Mariam Keebler",
    "description" => "Libero provident nobis cupiditate omnis officiis sequi. Non similique sed eaque rerum.",
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
    ]
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