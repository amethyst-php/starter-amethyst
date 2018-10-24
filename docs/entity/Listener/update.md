## Update 


Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\ListenerManager;

$manager = new ListenerManager();
```

Retrieve an [entity](model.md) using the [repository](repository.md)


```php
$entity = $manager->getRepository()->findOneById(1);
```

Update an existent [entity](model.md)

```php
$params = [
    "name" => "El. psy. congroo. 1540340476.0836",
    "condition" => "{{ message is not empty ? 1 : 0 }}",
    "work" => [
        "name" => "Timmothy Paucek II",
        "payload" => [
            "class" => "Railken\\Amethyst\\Workers\\EmailWorker",
            "data" => [
                "id" => 1
            ]
        ],
        "description" => "Delectus voluptatem rerum possimus delectus officiis qui. Rerum nobis aperiam veritatis. Ipsum quasi suscipit ratione a."
    ],
    "data" => [
        "dummy1" => "dummy2"
    ],
    "event_class" => "Dummy"
];

$result = $manager->update($params);
```

* [Attributes](attributes.md)
* [Errors](errors.md)
* [Performing queries with the Repository](repository.md)
* [Handle the result](result.md)

---
[Back](index.md)