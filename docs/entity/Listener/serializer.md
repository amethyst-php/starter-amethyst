## Railken\Amethyst\Serializers\ListenerSerializer

The serializer is used to serialize an entity, you can retrieve it from the data.

```php
use Railken\Amethyst\Managers\ListenerManager;

$manager = new ListenerManager();

$serializer = $manager->getSerializer();

```

And use it so serialize an entity
Retrieving an entity

```php
$entity = $repository->findOneById(1);
$serializer->serialize($entity)->toArray(); // Returns an array

```
#### Extend the class

Create the new serializer in `app/Serializers/ListenerSerializer`
```php
class Railken\Amethyst\Serializers\ListenerSerializer as Serializer;

class ListenerSerializer extends Serializer {
	// ...
}
```
Update the file `configs/amethyst.listener` with the new class
```php
return [
    'data' => [
        'listener' => [
            'serializer' => App\Serializers\ListenerSerializer::class,
        ],
    ]
];
```

---
[Back](index.md)