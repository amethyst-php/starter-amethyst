## Update 


Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\DataBuilderManager;

$manager = new DataBuilderManager();
```

Retrieve an [entity](model.md) using the [repository](repository.md)


```php
$entity = $manager->getRepository()->findOneById(1);
```

Update an existent [entity](model.md)

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

$result = $manager->update($params);
```

* [Attributes](attributes.md)
* [Errors](errors.md)
* [Performing queries with the Repository](repository.md)
* [Handle the result](result.md)

---
[Back](index.md)