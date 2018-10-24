## Railken\Amethyst\Serializers\EmailLogSerializer

The serializer is used to serialize an entity, you can retrieve it from the data.

```php
use Railken\Amethyst\Managers\EmailLogManager;

$manager = new EmailLogManager();

$serializer = $manager->getSerializer();

```

And use it so serialize an entity
Retrieving an entity

```php
$entity = $repository->findOneById(1);
$serializer->serialize($entity)->toArray(); // Returns an array

```
#### Extend the class

Create the new serializer in `app/Serializers/EmailLogSerializer`
```php
class Railken\Amethyst\Serializers\EmailLogSerializer as Serializer;

class EmailLogSerializer extends Serializer {
	// ...
}
```
Update the file `configs/amethyst.email-log` with the new class
```php
return [
    'data' => [
        'email-log' => [
            'serializer' => App\Serializers\EmailLogSerializer::class,
        ],
    ]
];
```

---
[Back](index.md)