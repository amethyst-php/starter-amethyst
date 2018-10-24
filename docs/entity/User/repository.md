## Railken\Amethyst\Repositories\UserRepository

The repository is the class to perform queries.

```php
use Railken\Amethyst\Managers\UserManager;

$manager = new UserManager();

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

Create the new repository in `app/Repositories/UserRepository`
```php
class Railken\Amethyst\Repositories\UserRepository as Repository;

class UserRepository extends Repository {
	// ...
}
```
Update the file `configs/amethyst.user` with the new class
```php
return [
    'data' => [
        'user' => [
            'repository' => App\Repositories\UserRepository::class,
        ],
    ]
];
```

---
[Back](index.md)