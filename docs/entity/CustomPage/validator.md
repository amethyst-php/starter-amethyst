## Railken\Amethyst\Validators\CustomPageValidator

The validator is used during any operation that manipulate the data to check if the parameters are correct. Remember that each attribute has is own validation.

#### Extend the class

Create the new validator in `app/Validators/CustomPageValidator`
```php
class Railken\Amethyst\Validators\CustomPageValidator as Validator;

class CustomPageValidator extends Validator {
	// ...
}
```
Update the file `configs/amethyst.custom-page` with the new class
```php
return [
    'data' => [
        'custom-page' => [
            'validator' => App\Validators\CustomPageValidator::class,
        ],
    ]
];
```

---
[Back](index.md)