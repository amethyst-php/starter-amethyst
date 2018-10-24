## Railken\Amethyst\Repositories\FileGeneratorRepository

The repository is the class to perform queries.

```php
use Railken\Amethyst\Managers\FileGeneratorManager;

$manager = new FileGeneratorManager();

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

Create the new repository in `app/Repositories/FileGeneratorRepository`
```php
class Railken\Amethyst\Repositories\FileGeneratorRepository as Repository;

class FileGeneratorRepository extends Repository {
	// ...
}
```
Update the file `configs/amethyst.file-generator` with the new class
```php
return [
    'data' => [
        'file-generator' => [
            'repository' => App\Repositories\FileGeneratorRepository::class,
        ],
    ]
];
```

---
[Back](index.md)