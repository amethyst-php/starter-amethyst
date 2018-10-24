## Railken\Amethyst\Fakers\ConfigFaker

The faker can be used for testing or seeding.

Create a new entity using the faker

```php
use Railken\Amethyst\Fakers\ConfigFaker;

$result = $manager->create(ConfigFaker::make()->parameters());
```

#### Extend the class

Create the new faker in `app/Fakers/ConfigFaker`
```php
class Railken\Amethyst\Fakers\ConfigFaker as Faker;

class ConfigFaker extends Faker {
	// ...
}
```
Update the file `configs/amethyst.config` with the new class
```php
return [
    'data' => [
        'config' => [
            'faker' => App\Fakers\ConfigFaker::class,
        ],
    ]
];
```


---
[Back](index.md)