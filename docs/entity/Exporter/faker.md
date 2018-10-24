## Railken\Amethyst\Fakers\ExporterFaker

The faker can be used for testing or seeding.

Create a new entity using the faker

```php
use Railken\Amethyst\Fakers\ExporterFaker;

$result = $manager->create(ExporterFaker::make()->parameters());
```

#### Extend the class

Create the new faker in `app/Fakers/ExporterFaker`
```php
class Railken\Amethyst\Fakers\ExporterFaker as Faker;

class ExporterFaker extends Faker {
	// ...
}
```
Update the file `configs/amethyst.exporter` with the new class
```php
return [
    'data' => [
        'exporter' => [
            'faker' => App\Fakers\ExporterFaker::class,
        ],
    ]
];
```


---
[Back](index.md)