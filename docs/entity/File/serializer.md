## Railken\Amethyst\Serializers\FileSerializer

The serializer is used to serialize an entity, you can retrieve it from the data.

```php
use Railken\Amethyst\Managers\FileManager;

$manager = new FileManager();

$serializer = $manager->getSerializer();

```

And use it so serialize an entity
Retrieving an entity

```php
$entity = $repository->findOneById(1);
$serializer->serialize($entity)->toArray(); // Returns an array

```
#### Extend the class

Create the new serializer in `app/Serializers/FileSerializer`
```php
class Railken\Amethyst\Serializers\FileSerializer as Serializer;

class FileSerializer extends Serializer {
	// ...
}
```
Update the file `configs/amethyst.file` with the new class
```php
return [
    'data' => [
        'file' => [
            'serializer' => App\Serializers\FileSerializer::class,
        ],
    ]
];
```

---
[Back](index.md)