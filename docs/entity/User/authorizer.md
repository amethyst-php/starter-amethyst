## Railken\Amethyst\Authorizers\UserAuthorizer

The authorizer is used during any operation that manipulate the data to check if the agent is authorized or not

#### Extend the class

Create the new authorizer in `app/Authorizers/UserAuthorizer`
```php
class Railken\Amethyst\Authorizers\UserAuthorizer as Authorizer;

class UserAuthorizer extends Authorizer {
	// ...
}
```
Update the file `configs/amethyst.user` with the new class
```php
return [
    'data' => [
        'user' => [
            'authorizer' => App\Authorizers\UserAuthorizer::class,
        ],
    ]
];
```

---
[Back](index.md)