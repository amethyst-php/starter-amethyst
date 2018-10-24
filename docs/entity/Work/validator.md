## Railken\Amethyst\Validators\WorkValidator

The validator is used during any operation that manipulate the data to check if the parameters are correct. Remember that each attribute has is own validation.

#### Extend the class

Create the new validator in `app/Validators/WorkValidator`
```php
class Railken\Amethyst\Validators\WorkValidator as Validator;

class WorkValidator extends Validator {
	// ...
}
```
Update the file `configs/amethyst.work` with the new class
```php
return [
    'data' => [
        'work' => [
            'validator' => App\Validators\WorkValidator::class,
        ],
    ]
];
```

---
[Back](index.md)