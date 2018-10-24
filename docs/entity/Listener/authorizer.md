## Railken\Amethyst\Authorizers\ListenerAuthorizer

The authorizer is used during any operation that manipulate the data to check if the agent is authorized or not

#### Extend the class

Create the new authorizer in `app/Authorizers/ListenerAuthorizer`
```php
class Railken\Amethyst\Authorizers\ListenerAuthorizer as Authorizer;

class ListenerAuthorizer extends Authorizer {
	// ...
}
```
Update the file `configs/amethyst.listener` with the new class
```php
return [
    'data' => [
        'listener' => [
            'authorizer' => App\Authorizers\ListenerAuthorizer::class,
        ],
    ]
];
```

---
[Back](index.md)