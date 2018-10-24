## Railken\Amethyst\Repositories\EmailLogRepository

The repository is the class to perform queries.

```php
use Railken\Amethyst\Managers\EmailLogManager;

$manager = new EmailLogManager();

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

Create the new repository in `app/Repositories/EmailLogRepository`
```php
class Railken\Amethyst\Repositories\EmailLogRepository as Repository;

class EmailLogRepository extends Repository {
	// ...
}
```
Update the file `configs/amethyst.email-log` with the new class
```php
return [
    'data' => [
        'email-log' => [
            'repository' => App\Repositories\EmailLogRepository::class,
        ],
    ]
];
```

---
[Back](index.md)