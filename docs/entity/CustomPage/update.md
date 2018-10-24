## Update 


Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\CustomPageManager;

$manager = new CustomPageManager();
```

Retrieve an [entity](model.md) using the [repository](repository.md)


```php
$entity = $manager->getRepository()->findOneById(1);
```

Update an existent [entity](model.md)

```php
$params = [
    "name" => "Susana Witting MD",
    "config" => [
        "test" => "test"
    ],
    "category" => "Ofelia Steuber",
    "html" => "Welcome <p>test</p>",
    "url" => "welcome",
    "label" => "Welcome",
    "description" => "Et velit cum harum veritatis dolorem eos modi molestias. Facilis aperiam ut dolorem. Non molestias ut fugiat ea dolor."
];

$result = $manager->update($params);
```

* [Attributes](attributes.md)
* [Errors](errors.md)
* [Performing queries with the Repository](repository.md)
* [Handle the result](result.md)

---
[Back](index.md)