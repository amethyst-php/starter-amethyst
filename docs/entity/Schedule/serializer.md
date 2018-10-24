## Railken\Amethyst\Serializers\ScheduleSerializer

The serializer is used to serialize an entity, you can retrieve it from the data.

```php
use Railken\Amethyst\Managers\ScheduleManager;

$manager = new ScheduleManager();

$serializer = $manager->getSerializer();

```

And use it so serialize an entity
Retrieving an entity

```php
$entity = $repository->findOneById(1);
$serializer->serialize($entity)->toArray(); // Returns an array

```
#### Extend the class

Create the new serializer in `app/Serializers/ScheduleSerializer`
```php
class Railken\Amethyst\Serializers\ScheduleSerializer as Serializer;

class ScheduleSerializer extends Serializer {
	// ...
}
```
Update the file `configs/amethyst.schedule` with the new class
```php
return [
    'data' => [
        'schedule' => [
            'serializer' => App\Serializers\ScheduleSerializer::class,
        ],
    ]
];
```

---
[Back](index.md)