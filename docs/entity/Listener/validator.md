## Railken\Amethyst\Validators\ListenerValidator

The validator is used during any operation that manipulate the data to check if the parameters are correct. Remember that each attribute has is own validation.

#### Extend the class

Create the new validator in `app/Validators/ListenerValidator`
```php
class Railken\Amethyst\Validators\ListenerValidator as Validator;

class ListenerValidator extends Validator {
	// ...
}
```
Update the file `configs/amethyst.listener` with the new class
```php
return [
    'data' => [
        'listener' => [
            'validator' => App\Validators\ListenerValidator::class,
        ],
    ]
];
```

---
[Back](index.md)