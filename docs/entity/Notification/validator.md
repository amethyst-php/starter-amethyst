## Railken\Amethyst\Validators\NotificationValidator

The validator is used during any operation that manipulate the data to check if the parameters are correct. Remember that each attribute has is own validation.

#### Extend the class

Create the new validator in `app/Validators/NotificationValidator`
```php
class Railken\Amethyst\Validators\NotificationValidator as Validator;

class NotificationValidator extends Validator {
	// ...
}
```
Update the file `configs/amethyst.notification` with the new class
```php
return [
    'data' => [
        'notification' => [
            'validator' => App\Validators\NotificationValidator::class,
        ],
    ]
];
```

---
[Back](index.md)