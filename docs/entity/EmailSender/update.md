## Update 


Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\EmailSenderManager;

$manager = new EmailSenderManager();
```

Retrieve an [entity](model.md) using the [repository](repository.md)


```php
$entity = $manager->getRepository()->findOneById(1);
```

Update an existent [entity](model.md)

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

$result = $manager->update($params);
```

* [Attributes](attributes.md)
* [Errors](errors.md)
* [Performing queries with the Repository](repository.md)
* [Handle the result](result.md)

---
[Back](index.md)