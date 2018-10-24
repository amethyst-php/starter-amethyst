## Railken\Amethyst\Validators\EmailSenderValidator

The validator is used during any operation that manipulate the data to check if the parameters are correct. Remember that each attribute has is own validation.

#### Extend the class

Create the new validator in `app/Validators/EmailSenderValidator`
```php
class Railken\Amethyst\Validators\EmailSenderValidator as Validator;

class EmailSenderValidator extends Validator {
	// ...
}
```
Update the file `configs/amethyst.email-sender` with the new class
```php
return [
    'data' => [
        'email-sender' => [
            'validator' => App\Validators\EmailSenderValidator::class,
        ],
    ]
];
```

---
[Back](index.md)