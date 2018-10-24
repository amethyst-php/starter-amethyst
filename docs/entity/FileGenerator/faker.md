## Railken\Amethyst\Fakers\FileGeneratorFaker

The faker can be used for testing or seeding.

Create a new entity using the faker

```php
use Railken\Amethyst\Fakers\FileGeneratorFaker;

$result = $manager->create(FileGeneratorFaker::make()->parameters());
```

#### Extend the class

Create the new faker in `app/Fakers/FileGeneratorFaker`
```php
class Railken\Amethyst\Fakers\FileGeneratorFaker as Faker;

class FileGeneratorFaker extends Faker {
	// ...
}
```
Update the file `configs/amethyst.file-generator` with the new class
```php
return [
    'data' => [
        'file-generator' => [
            'faker' => App\Fakers\FileGeneratorFaker::class,
        ],
    ]
];
```


---
[Back](index.md)