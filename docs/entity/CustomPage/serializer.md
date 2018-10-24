## Railken\Amethyst\Serializers\CustomPageSerializer

The serializer is used to serialize an entity, you can retrieve it from the data.

```php
use Railken\Amethyst\Managers\CustomPageManager;

$manager = new CustomPageManager();

$serializer = $manager->getSerializer();

```

And use it so serialize an entity
Retrieving an entity

```php
$entity = $repository->findOneById(1);
$serializer->serialize($entity)->toArray(); // Returns an array

```
#### Extend the class

Create the new serializer in `app/Serializers/CustomPageSerializer`
```php
class Railken\Amethyst\Serializers\CustomPageSerializer as Serializer;

class CustomPageSerializer extends Serializer {
	// ...
}
```
Update the file `configs/amethyst.custom-page` with the new class
```php
return [
    'data' => [
        'custom-page' => [
            'serializer' => App\Serializers\CustomPageSerializer::class,
        ],
    ]
];
```

---
[Back](index.md)