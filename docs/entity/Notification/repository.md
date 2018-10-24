## Railken\Amethyst\Repositories\NotificationRepository

The repository is the class to perform queries.

```php
use Railken\Amethyst\Managers\NotificationManager;

$manager = new NotificationManager();

$repository = $manager->getRepository();

```

Retrieving an entity

```php
$repository->findOneBy(['id' => 1]);
$repository->findOneById(1);

```

Retrieving all entities

```php
$repository->findAll();
```

Performing a query using \Illuminate\DataBase\Eloquent\Builder

```php
$repository->newQuery()->where('id', 1)->first();

```

#### Extend the class

Create the new repository in `app/Repositories/NotificationRepository`
```php
class Railken\Amethyst\Repositories\NotificationRepository as Repository;

class NotificationRepository extends Repository {
	// ...
}
```
Update the file `configs/amethyst.notification` with the new class
```php
return [
    'data' => [
        'notification' => [
            'repository' => App\Repositories\NotificationRepository::class,
        ],
    ]
];
```

---
[Back](index.md)