## Create

Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\EmailSenderManager;

$manager = new EmailSenderManager();
```

Create a new [entity](model.md)

```php
$params = [
    "name" => "Dr. Maryse Wilderman PhD",
    "description" => "Culpa dolorum recusandae rerum doloremque. Doloribus incidunt ut rerum quasi repellat modi dolor. Odit quibusdam quasi officiis. Possimus tenetur neque ut dolorum et nesciunt.",
    "data_builder" => [
        "name" => "Gabriel Stark",
        "description" => "Nihil ut est fuga. Animi est quibusdam commodi et fuga id aut. Autem at consectetur quod dolores et. Quidem voluptate fuga nisi rem at.",
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
            "class_name" => "Railken\\Amethyst\\DataBuilders\\EmailSenderDataBuilder"
        ]
    ],
    "subject" => "test",
    "body" => "test",
    "sender" => "test@test.net",
    "recipients" => "test@test.net",
    "attachments" => [
        [
            "as" => "test.txt",
            "source" => "file"
        ]
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
    "name" => "Dr. Maryse Wilderman PhD",
    "description" => "Culpa dolorum recusandae rerum doloremque. Doloribus incidunt ut rerum quasi repellat modi dolor. Odit quibusdam quasi officiis. Possimus tenetur neque ut dolorum et nesciunt.",
    "data_builder" => [
        "name" => "Gabriel Stark",
        "description" => "Nihil ut est fuga. Animi est quibusdam commodi et fuga id aut. Autem at consectetur quod dolores et. Quidem voluptate fuga nisi rem at.",
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
            "class_name" => "Railken\\Amethyst\\DataBuilders\\EmailSenderDataBuilder"
        ]
    ],
    "subject" => "test",
    "body" => "test",
    "sender" => "test@test.net",
    "recipients" => "test@test.net",
    "attachments" => [
        [
            "as" => "test.txt",
            "source" => "file"
        ]
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