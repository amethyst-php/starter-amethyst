## Railken\Amethyst\Repositories\FileRepository

The repository is the class to perform queries.

```php
use Railken\Amethyst\Managers\FileManager;

$manager = new FileManager();

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

Create the new repository in `app/Repositories/FileRepository`
```php
class Railken\Amethyst\Repositories\FileRepository as Repository;

class FileRepository extends Repository {
	// ...
}
```
Update the file `configs/amethyst.file` with the new class
```php
return [
    'data' => [
        'file' => [
            'repository' => App\Repositories\FileRepository::class,
        ],
    ]
];
```

---
[Back](index.md)