## Railken\Amethyst\Fakers\UserFaker

The faker can be used for testing or seeding.

Create a new entity using the faker

```php
use Railken\Amethyst\Fakers\UserFaker;

$result = $manager->create(UserFaker::make()->parameters());
```

#### Extend the class

Create the new faker in `app/Fakers/UserFaker`
```php
class Railken\Amethyst\Fakers\UserFaker as Faker;

class UserFaker extends Faker {
	// ...
}
```
Update the file `configs/amethyst.user` with the new class
```php
return [
    'data' => [
        'user' => [
            'faker' => App\Fakers\UserFaker::class,
        ],
    ]
];
```


---
[Back](index.md)