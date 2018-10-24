## Railken\Amethyst\Schemas\FileSchema

The schema is used to define the structure of the attributes. All the $attributes in the [model](model.md) and in the [manager](manager.md) are initialized by the schema.

#### Extend the class

Create the new schema in `app/Schemas/FileSchema`
```php
class Railken\Amethyst\Schemas\FileSchema as Schema;

class FileSchema extends Schema {
	// ...
}
```
Update the file `configs/amethyst.file` with the new class
```php
return [
    'data' => [
        'file' => [
            'schema' => App\Schemas\FileSchema::class,
        ],
    ]
];
```

---
[Back](index.md)