## Railken\Amethyst\Validators\DataBuilderValidator

The validator is used during any operation that manipulate the data to check if the parameters are correct. Remember that each attribute has is own validation.

#### Extend the class

Create the new validator in `app/Validators/DataBuilderValidator`
```php
class Railken\Amethyst\Validators\DataBuilderValidator as Validator;

class DataBuilderValidator extends Validator {
	// ...
}
```
Update the file `configs/amethyst.data-builder` with the new class
```php
return [
    'data' => [
        'data-builder' => [
            'validator' => App\Validators\DataBuilderValidator::class,
        ],
    ]
];
```

---
[Back](index.md)