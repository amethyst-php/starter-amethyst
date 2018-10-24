## Railken\Amethyst\Serializers\EmailSenderSerializer

The serializer is used to serialize an entity, you can retrieve it from the data.

```php
use Railken\Amethyst\Managers\EmailSenderManager;

$manager = new EmailSenderManager();

$serializer = $manager->getSerializer();

```

And use it so serialize an entity
Retrieving an entity

```php
$entity = $repository->findOneById(1);
$serializer->serialize($entity)->toArray(); // Returns an array

```
#### Extend the class

Create the new serializer in `app/Serializers/EmailSenderSerializer`
```php
class Railken\Amethyst\Serializers\EmailSenderSerializer as Serializer;

class EmailSenderSerializer extends Serializer {
	// ...
}
```
Update the file `configs/amethyst.email-sender` with the new class
```php
return [
    'data' => [
        'email-sender' => [
            'serializer' => App\Serializers\EmailSenderSerializer::class,
        ],
    ]
];
```

---
[Back](index.md)