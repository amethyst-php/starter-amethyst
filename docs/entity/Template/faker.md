## Railken\Amethyst\Fakers\TemplateFaker

The faker can be used for testing or seeding.

Create a new entity using the faker

```php
use Railken\Amethyst\Fakers\TemplateFaker;

$result = $manager->create(TemplateFaker::make()->parameters());
```

#### Extend the class

Create the new faker in `app/Fakers/TemplateFaker`
```php
class Railken\Amethyst\Fakers\TemplateFaker as Faker;

class TemplateFaker extends Faker {
	// ...
}
```
Update the file `configs/amethyst.template` with the new class
```php
return [
    'data' => [
        'template' => [
            'faker' => App\Fakers\TemplateFaker::class,
        ],
    ]
];
```


---
[Back](index.md)