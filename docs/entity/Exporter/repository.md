## Railken\Amethyst\Repositories\ExporterRepository

The repository is the class to perform queries.

```php
use Railken\Amethyst\Managers\ExporterManager;

$manager = new ExporterManager();

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

Create the new repository in `app/Repositories/ExporterRepository`
```php
class Railken\Amethyst\Repositories\ExporterRepository as Repository;

class ExporterRepository extends Repository {
	// ...
}
```
Update the file `configs/amethyst.exporter` with the new class
```php
return [
    'data' => [
        'exporter' => [
            'repository' => App\Repositories\ExporterRepository::class,
        ],
    ]
];
```

---
[Back](index.md)