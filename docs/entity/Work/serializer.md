## Railken\Amethyst\Serializers\WorkSerializer

The serializer is used to serialize an entity, you can retrieve it from the data.

```php
use Railken\Amethyst\Managers\WorkManager;

$manager = new WorkManager();

$serializer = $manager->getSerializer();

```

And use it so serialize an entity
Retrieving an entity

```php
$entity = $repository->findOneById(1);
$serializer->serialize($entity)->toArray(); // Returns an array

```
#### Extend the class

Create the new serializer in `app/Serializers/WorkSerializer`
```php
class Railken\Amethyst\Serializers\WorkSerializer as Serializer;

class WorkSerializer extends Serializer {
	// ...
}
```
Update the file `configs/amethyst.work` with the new class
```php
return [
    'data' => [
        'work' => [
            'serializer' => App\Serializers\WorkSerializer::class,
        ],
    ]
];
```

---
[Back](index.md)