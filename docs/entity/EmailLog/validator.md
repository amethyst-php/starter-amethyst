## Railken\Amethyst\Validators\EmailLogValidator

The validator is used during any operation that manipulate the data to check if the parameters are correct. Remember that each attribute has is own validation.

#### Extend the class

Create the new validator in `app/Validators/EmailLogValidator`
```php
class Railken\Amethyst\Validators\EmailLogValidator as Validator;

class EmailLogValidator extends Validator {
	// ...
}
```
Update the file `configs/amethyst.email-log` with the new class
```php
return [
    'data' => [
        'email-log' => [
            'validator' => App\Validators\EmailLogValidator::class,
        ],
    ]
];
```

---
[Back](index.md)