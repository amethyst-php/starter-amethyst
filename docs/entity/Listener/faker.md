## Railken\Amethyst\Fakers\ListenerFaker

The faker can be used for testing or seeding.

Create a new entity using the faker

```php
use Railken\Amethyst\Fakers\ListenerFaker;

$result = $manager->create(ListenerFaker::make()->parameters());
```

#### Extend the class

Create the new faker in `app/Fakers/ListenerFaker`
```php
class Railken\Amethyst\Fakers\ListenerFaker as Faker;

class ListenerFaker extends Faker {
	// ...
}
```
Update the file `configs/amethyst.listener` with the new class
```php
return [
    'data' => [
        'listener' => [
            'faker' => App\Fakers\ListenerFaker::class,
        ],
    ]
];
```


---
[Back](index.md)