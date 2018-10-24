## Railken\Amethyst\Validators\ExporterValidator

The validator is used during any operation that manipulate the data to check if the parameters are correct. Remember that each attribute has is own validation.

#### Extend the class

Create the new validator in `app/Validators/ExporterValidator`
```php
class Railken\Amethyst\Validators\ExporterValidator as Validator;

class ExporterValidator extends Validator {
	// ...
}
```
Update the file `configs/amethyst.exporter` with the new class
```php
return [
    'data' => [
        'exporter' => [
            'validator' => App\Validators\ExporterValidator::class,
        ],
    ]
];
```

---
[Back](index.md)