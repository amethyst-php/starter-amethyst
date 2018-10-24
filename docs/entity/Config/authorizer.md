## Railken\Amethyst\Authorizers\ConfigAuthorizer

The authorizer is used during any operation that manipulate the data to check if the agent is authorized or not

#### Extend the class

Create the new authorizer in `app/Authorizers/ConfigAuthorizer`
```php
class Railken\Amethyst\Authorizers\ConfigAuthorizer as Authorizer;

class ConfigAuthorizer extends Authorizer {
	// ...
}
```
Update the file `configs/amethyst.config` with the new class
```php
return [
    'data' => [
        'config' => [
            'authorizer' => App\Authorizers\ConfigAuthorizer::class,
        ],
    ]
];
```

---
[Back](index.md)