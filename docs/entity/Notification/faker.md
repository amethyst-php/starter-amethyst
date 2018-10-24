## Railken\Amethyst\Fakers\NotificationFaker

The faker can be used for testing or seeding.

Create a new entity using the faker

```php
use Railken\Amethyst\Fakers\NotificationFaker;

$result = $manager->create(NotificationFaker::make()->parameters());
```

#### Extend the class

Create the new faker in `app/Fakers/NotificationFaker`
```php
class Railken\Amethyst\Fakers\NotificationFaker as Faker;

class NotificationFaker extends Faker {
	// ...
}
```
Update the file `configs/amethyst.notification` with the new class
```php
return [
    'data' => [
        'notification' => [
            'faker' => App\Fakers\NotificationFaker::class,
        ],
    ]
];
```


---
[Back](index.md)