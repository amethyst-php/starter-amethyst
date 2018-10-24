## Railken\Amethyst\Fakers\EmailSenderFaker

The faker can be used for testing or seeding.

Create a new entity using the faker

```php
use Railken\Amethyst\Fakers\EmailSenderFaker;

$result = $manager->create(EmailSenderFaker::make()->parameters());
```

#### Extend the class

Create the new faker in `app/Fakers/EmailSenderFaker`
```php
class Railken\Amethyst\Fakers\EmailSenderFaker as Faker;

class EmailSenderFaker extends Faker {
	// ...
}
```
Update the file `configs/amethyst.email-sender` with the new class
```php
return [
    'data' => [
        'email-sender' => [
            'faker' => App\Fakers\EmailSenderFaker::class,
        ],
    ]
];
```


---
[Back](index.md)