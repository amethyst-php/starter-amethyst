## Railken\Amethyst\Validators\ConfigValidator

The validator is used during any operation that manipulate the data to check if the parameters are correct. Remember that each attribute has is own validation.

#### Extend the class

Create the new validator in `app/Validators/ConfigValidator`
```php
class Railken\Amethyst\Validators\ConfigValidator as Validator;

class ConfigValidator extends Validator {
	// ...
}
```
Update the file `configs/amethyst.config` with the new class
```php
return [
    'data' => [
        'config' => [
            'validator' => App\Validators\ConfigValidator::class,
        ],
    ]
];
```

---
[Back](index.md)