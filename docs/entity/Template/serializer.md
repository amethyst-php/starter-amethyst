## Railken\Amethyst\Serializers\TemplateSerializer

The serializer is used to serialize an entity, you can retrieve it from the data.

```php
use Railken\Amethyst\Managers\TemplateManager;

$manager = new TemplateManager();

$serializer = $manager->getSerializer();

```

And use it so serialize an entity
Retrieving an entity

```php
$entity = $repository->findOneById(1);
$serializer->serialize($entity)->toArray(); // Returns an array

```
#### Extend the class

Create the new serializer in `app/Serializers/TemplateSerializer`
```php
class Railken\Amethyst\Serializers\TemplateSerializer as Serializer;

class TemplateSerializer extends Serializer {
	// ...
}
```
Update the file `configs/amethyst.template` with the new class
```php
return [
    'data' => [
        'template' => [
            'serializer' => App\Serializers\TemplateSerializer::class,
        ],
    ]
];
```

---
[Back](index.md)