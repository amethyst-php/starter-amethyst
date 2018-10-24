## Railken\Amethyst\Authorizers\NotificationAuthorizer

The authorizer is used during any operation that manipulate the data to check if the agent is authorized or not

#### Extend the class

Create the new authorizer in `app/Authorizers/NotificationAuthorizer`
```php
class Railken\Amethyst\Authorizers\NotificationAuthorizer as Authorizer;

class NotificationAuthorizer extends Authorizer {
	// ...
}
```
Update the file `configs/amethyst.notification` with the new class
```php
return [
    'data' => [
        'notification' => [
            'authorizer' => App\Authorizers\NotificationAuthorizer::class,
        ],
    ]
];
```

---
[Back](index.md)