## Railken\Amethyst\Authorizers\TemplateAuthorizer

The authorizer is used during any operation that manipulate the data to check if the agent is authorized or not

#### Extend the class

Create the new authorizer in `app/Authorizers/TemplateAuthorizer`
```php
class Railken\Amethyst\Authorizers\TemplateAuthorizer as Authorizer;

class TemplateAuthorizer extends Authorizer {
	// ...
}
```
Update the file `configs/amethyst.template` with the new class
```php
return [
    'data' => [
        'template' => [
            'authorizer' => App\Authorizers\TemplateAuthorizer::class,
        ],
    ]
];
```

---
[Back](index.md)