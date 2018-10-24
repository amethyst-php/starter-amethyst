## Update 


Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\NotificationManager;

$manager = new NotificationManager();
```

Retrieve an [entity](model.md) using the [repository](repository.md)


```php
$entity = $manager->getRepository()->findOneById(1);
```

Update an existent [entity](model.md)

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

$result = $manager->update($params);
```

* [Attributes](attributes.md)
* [Errors](errors.md)
* [Performing queries with the Repository](repository.md)
* [Handle the result](result.md)

---
[Back](index.md)