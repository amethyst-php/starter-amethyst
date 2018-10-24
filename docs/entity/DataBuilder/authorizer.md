## Railken\Amethyst\Authorizers\DataBuilderAuthorizer

The authorizer is used during any operation that manipulate the data to check if the agent is authorized or not

#### Extend the class

Create the new authorizer in `app/Authorizers/DataBuilderAuthorizer`
```php
class Railken\Amethyst\Authorizers\DataBuilderAuthorizer as Authorizer;

class DataBuilderAuthorizer extends Authorizer {
	// ...
}
```
Update the file `configs/amethyst.data-builder` with the new class
```php
return [
    'data' => [
        'data-builder' => [
            'authorizer' => App\Authorizers\DataBuilderAuthorizer::class,
        ],
    ]
];
```

---
[Back](index.md)