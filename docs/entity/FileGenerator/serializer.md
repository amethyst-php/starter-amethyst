## Railken\Amethyst\Serializers\FileGeneratorSerializer

The serializer is used to serialize an entity, you can retrieve it from the data.

```php
use Railken\Amethyst\Managers\FileGeneratorManager;

$manager = new FileGeneratorManager();

$serializer = $manager->getSerializer();

```

And use it so serialize an entity
Retrieving an entity

```php
$entity = $repository->findOneById(1);
$serializer->serialize($entity)->toArray(); // Returns an array

```
#### Extend the class

Create the new serializer in `app/Serializers/FileGeneratorSerializer`
```php
class Railken\Amethyst\Serializers\FileGeneratorSerializer as Serializer;

class FileGeneratorSerializer extends Serializer {
	// ...
}
```
Update the file `configs/amethyst.file-generator` with the new class
```php
return [
    'data' => [
        'file-generator' => [
            'serializer' => App\Serializers\FileGeneratorSerializer::class,
        ],
    ]
];
```

---
[Back](index.md)