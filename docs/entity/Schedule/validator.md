## Railken\Amethyst\Validators\ScheduleValidator

The validator is used during any operation that manipulate the data to check if the parameters are correct. Remember that each attribute has is own validation.

#### Extend the class

Create the new validator in `app/Validators/ScheduleValidator`
```php
class Railken\Amethyst\Validators\ScheduleValidator as Validator;

class ScheduleValidator extends Validator {
	// ...
}
```
Update the file `configs/amethyst.schedule` with the new class
```php
return [
    'data' => [
        'schedule' => [
            'validator' => App\Validators\ScheduleValidator::class,
        ],
    ]
];
```

---
[Back](index.md)