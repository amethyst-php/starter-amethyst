## Railken\Amethyst\Serializers\DataBuilderSerializer

The serializer is used to serialize an entity, you can retrieve it from the data.

```php
use Railken\Amethyst\Managers\DataBuilderManager;

$manager = new DataBuilderManager();

$serializer = $manager->getSerializer();

```

And use it so serialize an entity
Retrieving an entity

```php
$entity = $repository->findOneById(1);
$serializer->serialize($entity)->toArray(); // Returns an array

```
#### Extend the class

Create the new serializer in `app/Serializers/DataBuilderSerializer`
```php
class Railken\Amethyst\Serializers\DataBuilderSerializer as Serializer;

class DataBuilderSerializer extends Serializer {
	// ...
}
```
Update the file `configs/amethyst.data-builder` with the new class
```php
return [
    'data' => [
        'data-builder' => [
            'serializer' => App\Serializers\DataBuilderSerializer::class,
        ],
    ]
];
```

---
[Back](index.md)