## Railken\Amethyst\Repositories\CustomPageRepository

The repository is the class to perform queries.

```php
use Railken\Amethyst\Managers\CustomPageManager;

$manager = new CustomPageManager();

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

Create the new repository in `app/Repositories/CustomPageRepository`
```php
class Railken\Amethyst\Repositories\CustomPageRepository as Repository;

class CustomPageRepository extends Repository {
	// ...
}
```
Update the file `configs/amethyst.custom-page` with the new class
```php
return [
    'data' => [
        'custom-page' => [
            'repository' => App\Repositories\CustomPageRepository::class,
        ],
    ]
];
```

---
[Back](index.md)