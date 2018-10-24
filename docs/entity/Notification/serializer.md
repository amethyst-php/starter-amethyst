## Railken\Amethyst\Serializers\NotificationSerializer

The serializer is used to serialize an entity, you can retrieve it from the data.

```php
use Railken\Amethyst\Managers\NotificationManager;

$manager = new NotificationManager();

$serializer = $manager->getSerializer();

```

And use it so serialize an entity
Retrieving an entity

```php
$entity = $repository->findOneById(1);
$serializer->serialize($entity)->toArray(); // Returns an array

```
#### Extend the class

Create the new serializer in `app/Serializers/NotificationSerializer`
```php
class Railken\Amethyst\Serializers\NotificationSerializer as Serializer;

class NotificationSerializer extends Serializer {
	// ...
}
```
Update the file `configs/amethyst.notification` with the new class
```php
return [
    'data' => [
        'notification' => [
            'serializer' => App\Serializers\NotificationSerializer::class,
        ],
    ]
];
```

---
[Back](index.md)