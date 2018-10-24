## Create

Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\ListenerManager;

$manager = new ListenerManager();
```

Create a new [entity](model.md)

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