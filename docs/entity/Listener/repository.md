## Railken\Amethyst\Repositories\ListenerRepository

The repository is the class to perform queries.

```php
use Railken\Amethyst\Managers\ListenerManager;

$manager = new ListenerManager();

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

Create the new repository in `app/Repositories/ListenerRepository`
```php
class Railken\Amethyst\Repositories\ListenerRepository as Repository;

class ListenerRepository extends Repository {
	// ...
}
```
Update the file `configs/amethyst.listener` with the new class
```php
return [
    'data' => [
        'listener' => [
            'repository' => App\Repositories\ListenerRepository::class,
        ],
    ]
];
```

---
[Back](index.md)