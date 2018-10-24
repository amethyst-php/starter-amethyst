## Railken\Amethyst\Fakers\WorkFaker

The faker can be used for testing or seeding.

Create a new entity using the faker

```php
use Railken\Amethyst\Fakers\WorkFaker;

$result = $manager->create(WorkFaker::make()->parameters());
```

#### Extend the class

Create the new faker in `app/Fakers/WorkFaker`
```php
class Railken\Amethyst\Fakers\WorkFaker as Faker;

class WorkFaker extends Faker {
	// ...
}
```
Update the file `configs/amethyst.work` with the new class
```php
return [
    'data' => [
        'work' => [
            'faker' => App\Fakers\WorkFaker::class,
        ],
    ]
];
```


---
[Back](index.md)