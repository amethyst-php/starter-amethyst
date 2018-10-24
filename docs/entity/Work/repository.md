## Railken\Amethyst\Repositories\WorkRepository

The repository is the class to perform queries.

```php
use Railken\Amethyst\Managers\WorkManager;

$manager = new WorkManager();

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

Create the new repository in `app/Repositories/WorkRepository`
```php
class Railken\Amethyst\Repositories\WorkRepository as Repository;

class WorkRepository extends Repository {
	// ...
}
```
Update the file `configs/amethyst.work` with the new class
```php
return [
    'data' => [
        'work' => [
            'repository' => App\Repositories\WorkRepository::class,
        ],
    ]
];
```

---
[Back](index.md)