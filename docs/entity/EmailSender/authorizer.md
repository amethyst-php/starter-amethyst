## Railken\Amethyst\Authorizers\EmailSenderAuthorizer

The authorizer is used during any operation that manipulate the data to check if the agent is authorized or not

#### Extend the class

Create the new authorizer in `app/Authorizers/EmailSenderAuthorizer`
```php
class Railken\Amethyst\Authorizers\EmailSenderAuthorizer as Authorizer;

class EmailSenderAuthorizer extends Authorizer {
	// ...
}
```
Update the file `configs/amethyst.email-sender` with the new class
```php
return [
    'data' => [
        'email-sender' => [
            'authorizer' => App\Authorizers\EmailSenderAuthorizer::class,
        ],
    ]
];
```

---
[Back](index.md)