## Railken\Amethyst\Authorizers\WorkAuthorizer

The authorizer is used during any operation that manipulate the data to check if the agent is authorized or not

#### Extend the class

Create the new authorizer in `app/Authorizers/WorkAuthorizer`
```php
class Railken\Amethyst\Authorizers\WorkAuthorizer as Authorizer;

class WorkAuthorizer extends Authorizer {
	// ...
}
```
Update the file `configs/amethyst.work` with the new class
```php
return [
    'data' => [
        'work' => [
            'authorizer' => App\Authorizers\WorkAuthorizer::class,
        ],
    ]
];
```

---
[Back](index.md)