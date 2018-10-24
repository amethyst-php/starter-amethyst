## Create

Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\NotificationManager;

$manager = new NotificationManager();
```

Create a new [entity](model.md)

```php
$params = [
    "id" => "00a76d64-822a-4621-9279-72ceff67f439",
    "type" => "Railken\\Amethyst\\Notifications\\BaseNotification",
    "notifiable_type" => "App\\User",
    "notifiable_id" => 1,
    "data" => [
        "message" => "A notification."
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
    "id" => "00a76d64-822a-4621-9279-72ceff67f439",
    "type" => "Railken\\Amethyst\\Notifications\\BaseNotification",
    "notifiable_type" => "App\\User",
    "notifiable_id" => 1,
    "data" => [
        "message" => "A notification."
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