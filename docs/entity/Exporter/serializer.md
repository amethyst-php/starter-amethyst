## Railken\Amethyst\Serializers\ExporterSerializer

The serializer is used to serialize an entity, you can retrieve it from the data.

```php
use Railken\Amethyst\Managers\ExporterManager;

$manager = new ExporterManager();

$serializer = $manager->getSerializer();

```

And use it so serialize an entity
Retrieving an entity

```php
$entity = $repository->findOneById(1);
$serializer->serialize($entity)->toArray(); // Returns an array

```
#### Extend the class

Create the new serializer in `app/Serializers/ExporterSerializer`
```php
class Railken\Amethyst\Serializers\ExporterSerializer as Serializer;

class ExporterSerializer extends Serializer {
	// ...
}
```
Update the file `configs/amethyst.exporter` with the new class
```php
return [
    'data' => [
        'exporter' => [
            'serializer' => App\Serializers\ExporterSerializer::class,
        ],
    ]
];
```

---
[Back](index.md)