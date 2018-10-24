## Railken\Amethyst\Repositories\ScheduleRepository

The repository is the class to perform queries.

```php
use Railken\Amethyst\Managers\ScheduleManager;

$manager = new ScheduleManager();

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

Create the new repository in `app/Repositories/ScheduleRepository`
```php
class Railken\Amethyst\Repositories\ScheduleRepository as Repository;

class ScheduleRepository extends Repository {
	// ...
}
```
Update the file `configs/amethyst.schedule` with the new class
```php
return [
    'data' => [
        'schedule' => [
            'repository' => App\Repositories\ScheduleRepository::class,
        ],
    ]
];
```

---
[Back](index.md)