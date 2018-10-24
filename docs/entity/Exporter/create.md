## Create

Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\ExporterManager;

$manager = new ExporterManager();
```

Create a new [entity](model.md)

```php
$params = [
    "name" => "Emmett Berge",
    "description" => "Dolorem dolor rerum consequuntur mollitia. Ipsum ut cupiditate at est dolore quia. Et aut est dicta rerum.",
    "data_builder" => [
        "name" => "Domenick Gerlach",
        "description" => "Earum dolore asperiores voluptatem totam ut. Omnis cum quia aspernatur laboriosam blanditiis non iure. Et sit sint expedita possimus nam dolorem eligendi.",
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
    ],
    "filename" => "exporters-{{ \"now\"|date(\"Ymd\") }}",
    "class_name" => "Railken\\Amethyst\\Jobs\\GenerateExportCsv",
    "body" => [
        "name" => "{{ record.name }}",
        "flag" => 2
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
    "name" => "Emmett Berge",
    "description" => "Dolorem dolor rerum consequuntur mollitia. Ipsum ut cupiditate at est dolore quia. Et aut est dicta rerum.",
    "data_builder" => [
        "name" => "Domenick Gerlach",
        "description" => "Earum dolore asperiores voluptatem totam ut. Omnis cum quia aspernatur laboriosam blanditiis non iure. Et sit sint expedita possimus nam dolorem eligendi.",
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
    ],
    "filename" => "exporters-{{ \"now\"|date(\"Ymd\") }}",
    "class_name" => "Railken\\Amethyst\\Jobs\\GenerateExportCsv",
    "body" => [
        "name" => "{{ record.name }}",
        "flag" => 2
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