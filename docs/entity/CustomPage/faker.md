## Railken\Amethyst\Fakers\CustomPageFaker

The faker can be used for testing or seeding.

Create a new entity using the faker

```php
use Railken\Amethyst\Fakers\CustomPageFaker;

$result = $manager->create(CustomPageFaker::make()->parameters());
```

#### Extend the class

Create the new faker in `app/Fakers/CustomPageFaker`
```php
class Railken\Amethyst\Fakers\CustomPageFaker as Faker;

class CustomPageFaker extends Faker {
	// ...
}
```
Update the file `configs/amethyst.custom-page` with the new class
```php
return [
    'data' => [
        'custom-page' => [
            'faker' => App\Fakers\CustomPageFaker::class,
        ],
    ]
];
```


---
[Back](index.md)