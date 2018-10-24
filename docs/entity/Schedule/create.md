## Create

Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\ScheduleManager;

$manager = new ScheduleManager();
```

Create a new [entity](model.md)

```php
$params = [
    "name" => "Forrest Barrows Jr.",
    "description" => "Iure id dolor non hic at sunt possimus. Iure tempora quasi ut nam rerum quia aut. Sunt et aut corrupti veniam officia qui.",
    "enabled" => 1,
    "cron" => "* * * * *",
    "work" => [
        "name" => "Maybell Kreiger",
        "payload" => [
            "dummy" => "dummy"
        ],
        "description" => "Velit et et voluptas ut ex quibusdam. Deleniti quo maxime pariatur. Officiis voluptas velit ex repudiandae voluptatem repellat."
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
    "name" => "Forrest Barrows Jr.",
    "description" => "Iure id dolor non hic at sunt possimus. Iure tempora quasi ut nam rerum quia aut. Sunt et aut corrupti veniam officia qui.",
    "enabled" => 1,
    "cron" => "* * * * *",
    "work" => [
        "name" => "Maybell Kreiger",
        "payload" => [
            "dummy" => "dummy"
        ],
        "description" => "Velit et et voluptas ut ex quibusdam. Deleniti quo maxime pariatur. Officiis voluptas velit ex repudiandae voluptatem repellat."
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