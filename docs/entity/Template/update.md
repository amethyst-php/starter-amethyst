## Update 


Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\TemplateManager;

$manager = new TemplateManager();
```

Retrieve an [entity](model.md) using the [repository](repository.md)


```php
$entity = $manager->getRepository()->findOneById(1);
```

Update an existent [entity](model.md)

```php
$params = [
    "name" => "a common name0.07059200 1540340476",
    "filename" => "test.pdf",
    "filetype" => "application/pdf",
    "description" => "A description",
    "content" => "The cake is a {{ message }}",
    "data_builder" => [
        "name" => "Savannah Keeling",
        "description" => "Sed debitis quos sed ut doloremque totam dolor. Est sunt dolore pariatur animi vero. Et perspiciatis quos a amet nulla optio blanditiis.",
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