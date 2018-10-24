## Update 


Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\ExporterManager;

$manager = new ExporterManager();
```

Retrieve an [entity](model.md) using the [repository](repository.md)


```php
$entity = $manager->getRepository()->findOneById(1);
```

Update an existent [entity](model.md)

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

$result = $manager->update($params);
```

* [Attributes](attributes.md)
* [Errors](errors.md)
* [Performing queries with the Repository](repository.md)
* [Handle the result](result.md)

---
[Back](index.md)