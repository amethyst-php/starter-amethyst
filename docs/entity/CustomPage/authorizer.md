## Railken\Amethyst\Authorizers\CustomPageAuthorizer

The authorizer is used during any operation that manipulate the data to check if the agent is authorized or not

#### Extend the class

Create the new authorizer in `app/Authorizers/CustomPageAuthorizer`
```php
class Railken\Amethyst\Authorizers\CustomPageAuthorizer as Authorizer;

class CustomPageAuthorizer extends Authorizer {
	// ...
}
```
Update the file `configs/amethyst.custom-page` with the new class
```php
return [
    'data' => [
        'custom-page' => [
            'authorizer' => App\Authorizers\CustomPageAuthorizer::class,
        ],
    ]
];
```

---
[Back](index.md)