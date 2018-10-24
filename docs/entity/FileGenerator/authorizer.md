## Railken\Amethyst\Authorizers\FileGeneratorAuthorizer

The authorizer is used during any operation that manipulate the data to check if the agent is authorized or not

#### Extend the class

Create the new authorizer in `app/Authorizers/FileGeneratorAuthorizer`
```php
class Railken\Amethyst\Authorizers\FileGeneratorAuthorizer as Authorizer;

class FileGeneratorAuthorizer extends Authorizer {
	// ...
}
```
Update the file `configs/amethyst.file-generator` with the new class
```php
return [
    'data' => [
        'file-generator' => [
            'authorizer' => App\Authorizers\FileGeneratorAuthorizer::class,
        ],
    ]
];
```

---
[Back](index.md)