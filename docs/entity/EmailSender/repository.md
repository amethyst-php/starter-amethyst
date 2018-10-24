## Railken\Amethyst\Repositories\EmailSenderRepository

The repository is the class to perform queries.

```php
use Railken\Amethyst\Managers\EmailSenderManager;

$manager = new EmailSenderManager();

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

Create the new repository in `app/Repositories/EmailSenderRepository`
```php
class Railken\Amethyst\Repositories\EmailSenderRepository as Repository;

class EmailSenderRepository extends Repository {
	// ...
}
```
Update the file `configs/amethyst.email-sender` with the new class
```php
return [
    'data' => [
        'email-sender' => [
            'repository' => App\Repositories\EmailSenderRepository::class,
        ],
    ]
];
```

---
[Back](index.md)