## Railken\Amethyst\Fakers\EmailLogFaker

The faker can be used for testing or seeding.

Create a new entity using the faker

```php
use Railken\Amethyst\Fakers\EmailLogFaker;

$result = $manager->create(EmailLogFaker::make()->parameters());
```

#### Extend the class

Create the new faker in `app/Fakers/EmailLogFaker`
```php
class Railken\Amethyst\Fakers\EmailLogFaker as Faker;

class EmailLogFaker extends Faker {
	// ...
}
```
Update the file `configs/amethyst.email-log` with the new class
```php
return [
    'data' => [
        'email-log' => [
            'faker' => App\Fakers\EmailLogFaker::class,
        ],
    ]
];
```


---
[Back](index.md)