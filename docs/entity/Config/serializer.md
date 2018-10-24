## Railken\Amethyst\Serializers\ConfigSerializer

The serializer is used to serialize an entity, you can retrieve it from the data.

```php
use Railken\Amethyst\Managers\ConfigManager;

$manager = new ConfigManager();

$serializer = $manager->getSerializer();

```

And use it so serialize an entity
Retrieving an entity

```php
$entity = $repository->findOneById(1);
$serializer->serialize($entity)->toArray(); // Returns an array

```
#### Extend the class

Create the new serializer in `app/Serializers/ConfigSerializer`
```php
class Railken\Amethyst\Serializers\ConfigSerializer as Serializer;

class ConfigSerializer extends Serializer {
	// ...
}
```
Update the file `configs/amethyst.config` with the new class
```php
return [
    'data' => [
        'config' => [
            'serializer' => App\Serializers\ConfigSerializer::class,
        ],
    ]
];
```

---
[Back](index.md)