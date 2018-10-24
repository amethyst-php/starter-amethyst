## Railken\Amethyst\Authorizers\ExporterAuthorizer

The authorizer is used during any operation that manipulate the data to check if the agent is authorized or not

#### Extend the class

Create the new authorizer in `app/Authorizers/ExporterAuthorizer`
```php
class Railken\Amethyst\Authorizers\ExporterAuthorizer as Authorizer;

class ExporterAuthorizer extends Authorizer {
	// ...
}
```
Update the file `configs/amethyst.exporter` with the new class
```php
return [
    'data' => [
        'exporter' => [
            'authorizer' => App\Authorizers\ExporterAuthorizer::class,
        ],
    ]
];
```

---
[Back](index.md)