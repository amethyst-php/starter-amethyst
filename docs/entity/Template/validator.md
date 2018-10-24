## Railken\Amethyst\Validators\TemplateValidator

The validator is used during any operation that manipulate the data to check if the parameters are correct. Remember that each attribute has is own validation.

#### Extend the class

Create the new validator in `app/Validators/TemplateValidator`
```php
class Railken\Amethyst\Validators\TemplateValidator as Validator;

class TemplateValidator extends Validator {
	// ...
}
```
Update the file `configs/amethyst.template` with the new class
```php
return [
    'data' => [
        'template' => [
            'validator' => App\Validators\TemplateValidator::class,
        ],
    ]
];
```

---
[Back](index.md)