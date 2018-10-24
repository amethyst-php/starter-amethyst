## Railken\Amethyst\Repositories\TemplateRepository

The repository is the class to perform queries.

```php
use Railken\Amethyst\Managers\TemplateManager;

$manager = new TemplateManager();

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

Create the new repository in `app/Repositories/TemplateRepository`
```php
class Railken\Amethyst\Repositories\TemplateRepository as Repository;

class TemplateRepository extends Repository {
	// ...
}
```
Update the file `configs/amethyst.template` with the new class
```php
return [
    'data' => [
        'template' => [
            'repository' => App\Repositories\TemplateRepository::class,
        ],
    ]
];
```

---
[Back](index.md)