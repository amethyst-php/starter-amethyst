## Railken\Amethyst\Fakers\DataBuilderFaker

The faker can be used for testing or seeding.

Create a new entity using the faker

```php
use Railken\Amethyst\Fakers\DataBuilderFaker;

$result = $manager->create(DataBuilderFaker::make()->parameters());
```

#### Extend the class

Create the new faker in `app/Fakers/DataBuilderFaker`
```php
class Railken\Amethyst\Fakers\DataBuilderFaker as Faker;

class DataBuilderFaker extends Faker {
	// ...
}
```
Update the file `configs/amethyst.data-builder` with the new class
```php
return [
    'data' => [
        'data-builder' => [
            'faker' => App\Fakers\DataBuilderFaker::class,
        ],
    ]
];
```


---
[Back](index.md)