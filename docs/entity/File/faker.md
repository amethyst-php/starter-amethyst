## Railken\Amethyst\Fakers\FileFaker

The faker can be used for testing or seeding.

Create a new entity using the faker

```php
use Railken\Amethyst\Fakers\FileFaker;

$result = $manager->create(FileFaker::make()->parameters());
```

#### Extend the class

Create the new faker in `app/Fakers/FileFaker`
```php
class Railken\Amethyst\Fakers\FileFaker as Faker;

class FileFaker extends Faker {
	// ...
}
```
Update the file `configs/amethyst.file` with the new class
```php
return [
    'data' => [
        'file' => [
            'faker' => App\Fakers\FileFaker::class,
        ],
    ]
];
```


---
[Back](index.md)