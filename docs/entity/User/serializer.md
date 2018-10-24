## Railken\Amethyst\Serializers\UserSerializer

The serializer is used to serialize an entity, you can retrieve it from the data.

```php
use Railken\Amethyst\Managers\UserManager;

$manager = new UserManager();

$serializer = $manager->getSerializer();

```

And use it so serialize an entity
Retrieving an entity

```php
$entity = $repository->findOneById(1);
$serializer->serialize($entity)->toArray(); // Returns an array

```
#### Extend the class

Create the new serializer in `app/Serializers/UserSerializer`
```php
class Railken\Amethyst\Serializers\UserSerializer as Serializer;

class UserSerializer extends Serializer {
	// ...
}
```
Update the file `configs/amethyst.user` with the new class
```php
return [
    'data' => [
        'user' => [
            'serializer' => App\Serializers\UserSerializer::class,
        ],
    ]
];
```

---
[Back](index.md)