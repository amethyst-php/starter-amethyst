## Railken\Amethyst\Validators\UserValidator

The validator is used during any operation that manipulate the data to check if the parameters are correct. Remember that each attribute has is own validation.

#### Extend the class

Create the new validator in `app/Validators/UserValidator`
```php
class Railken\Amethyst\Validators\UserValidator as Validator;

class UserValidator extends Validator {
	// ...
}
```
Update the file `configs/amethyst.user` with the new class
```php
return [
    'data' => [
        'user' => [
            'validator' => App\Validators\UserValidator::class,
        ],
    ]
];
```

---
[Back](index.md)