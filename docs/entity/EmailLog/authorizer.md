## Railken\Amethyst\Authorizers\EmailLogAuthorizer

The authorizer is used during any operation that manipulate the data to check if the agent is authorized or not

#### Extend the class

Create the new authorizer in `app/Authorizers/EmailLogAuthorizer`
```php
class Railken\Amethyst\Authorizers\EmailLogAuthorizer as Authorizer;

class EmailLogAuthorizer extends Authorizer {
	// ...
}
```
Update the file `configs/amethyst.email-log` with the new class
```php
return [
    'data' => [
        'email-log' => [
            'authorizer' => App\Authorizers\EmailLogAuthorizer::class,
        ],
    ]
];
```

---
[Back](index.md)