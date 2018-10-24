## Update 


Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\WorkManager;

$manager = new WorkManager();
```

Retrieve an [entity](model.md) using the [repository](repository.md)


```php
$entity = $manager->getRepository()->findOneById(1);
```

Update an existent [entity](model.md)

```php
$params = [
    "name" => "Dawn Bosco",
    "payload" => [
        "dummy" => "dummy"
    ],
    "description" => "Quia et quis cumque qui est cum ab. Sunt et sit quos cum impedit ipsum et. Rerum sint unde velit cum corporis tempora minus excepturi."
];

$result = $manager->update($params);
```

* [Attributes](attributes.md)
* [Errors](errors.md)
* [Performing queries with the Repository](repository.md)
* [Handle the result](result.md)

---
[Back](index.md)