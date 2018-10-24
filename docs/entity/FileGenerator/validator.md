## Railken\Amethyst\Validators\FileGeneratorValidator

The validator is used during any operation that manipulate the data to check if the parameters are correct. Remember that each attribute has is own validation.

#### Extend the class

Create the new validator in `app/Validators/FileGeneratorValidator`
```php
class Railken\Amethyst\Validators\FileGeneratorValidator as Validator;

class FileGeneratorValidator extends Validator {
	// ...
}
```
Update the file `configs/amethyst.file-generator` with the new class
```php
return [
    'data' => [
        'file-generator' => [
            'validator' => App\Validators\FileGeneratorValidator::class,
        ],
    ]
];
```

---
[Back](index.md)