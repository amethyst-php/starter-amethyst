## Railken\Amethyst\Authorizers\FileAuthorizer

The authorizer is used during any operation that manipulate the data to check if the agent is authorized or not

#### Extend the class

Create the new authorizer in `app/Authorizers/FileAuthorizer`
```php
class Railken\Amethyst\Authorizers\FileAuthorizer as Authorizer;

class FileAuthorizer extends Authorizer {
	// ...
}
```
Update the file `configs/amethyst.file` with the new class
```php
return [
    'data' => [
        'file' => [
            'authorizer' => App\Authorizers\FileAuthorizer::class,
        ],
    ]
];
```

---
[Back](index.md)