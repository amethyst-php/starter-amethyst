## Railken\Amethyst\Repositories\ConfigRepository

The repository is the class to perform queries.

```php
use Railken\Amethyst\Managers\ConfigManager;

$manager = new ConfigManager();

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

Create the new repository in `app/Repositories/ConfigRepository`
```php
class Railken\Amethyst\Repositories\ConfigRepository as Repository;

class ConfigRepository extends Repository {
	// ...
}
```
Update the file `configs/amethyst.config` with the new class
```php
return [
    'data' => [
        'config' => [
            'repository' => App\Repositories\ConfigRepository::class,
        ],
    ]
];
```

---
[Back](index.md)