## Create

Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\WorkManager;

$manager = new WorkManager();
```

Create a new [entity](model.md)

```php
$params = [
    "name" => "Dawn Bosco",
    "payload" => [
        "dummy" => "dummy"
    ],
    "description" => "Quia et quis cumque qui est cum ab. Sunt et sit quos cum impedit ipsum et. Rerum sint unde velit cum corporis tempora minus excepturi."
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
    "name" => "Dawn Bosco",
    "payload" => [
        "dummy" => "dummy"
    ],
    "description" => "Quia et quis cumque qui est cum ab. Sunt et sit quos cum impedit ipsum et. Rerum sint unde velit cum corporis tempora minus excepturi."
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