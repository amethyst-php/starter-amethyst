## Update 


Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\ScheduleManager;

$manager = new ScheduleManager();
```

Retrieve an [entity](model.md) using the [repository](repository.md)


```php
$entity = $manager->getRepository()->findOneById(1);
```

Update an existent [entity](model.md)

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

$result = $manager->update($params);
```

* [Attributes](attributes.md)
* [Errors](errors.md)
* [Performing queries with the Repository](repository.md)
* [Handle the result](result.md)

---
[Back](index.md)