## Railken\Amethyst\Authorizers\ScheduleAuthorizer

The authorizer is used during any operation that manipulate the data to check if the agent is authorized or not

#### Extend the class

Create the new authorizer in `app/Authorizers/ScheduleAuthorizer`
```php
class Railken\Amethyst\Authorizers\ScheduleAuthorizer as Authorizer;

class ScheduleAuthorizer extends Authorizer {
	// ...
}
```
Update the file `configs/amethyst.schedule` with the new class
```php
return [
    'data' => [
        'schedule' => [
            'authorizer' => App\Authorizers\ScheduleAuthorizer::class,
        ],
    ]
];
```

---
[Back](index.md)