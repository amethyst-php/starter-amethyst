## Railken\Amethyst\Fakers\ScheduleFaker

The faker can be used for testing or seeding.

Create a new entity using the faker

```php
use Railken\Amethyst\Fakers\ScheduleFaker;

$result = $manager->create(ScheduleFaker::make()->parameters());
```

#### Extend the class

Create the new faker in `app/Fakers/ScheduleFaker`
```php
class Railken\Amethyst\Fakers\ScheduleFaker as Faker;

class ScheduleFaker extends Faker {
	// ...
}
```
Update the file `configs/amethyst.schedule` with the new class
```php
return [
    'data' => [
        'schedule' => [
            'faker' => App\Fakers\ScheduleFaker::class,
        ],
    ]
];
```


---
[Back](index.md)