## Railken\Amethyst\Repositories\DataBuilderRepository

The repository is the class to perform queries.

```php
use Railken\Amethyst\Managers\DataBuilderManager;

$manager = new DataBuilderManager();

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

Create the new repository in `app/Repositories/DataBuilderRepository`
```php
class Railken\Amethyst\Repositories\DataBuilderRepository as Repository;

class DataBuilderRepository extends Repository {
	// ...
}
```
Update the file `configs/amethyst.data-builder` with the new class
```php
return [
    'data' => [
        'data-builder' => [
            'repository' => App\Repositories\DataBuilderRepository::class,
        ],
    ]
];
```

---
[Back](index.md)