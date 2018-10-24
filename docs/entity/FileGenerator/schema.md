## Railken\Amethyst\Schemas\FileGeneratorSchema

The schema is used to define the structure of the attributes. All the $attributes in the [model](model.md) and in the [manager](manager.md) are initialized by the schema.

#### Extend the class

Create the new schema in `app/Schemas/FileGeneratorSchema`
```php
class Railken\Amethyst\Schemas\FileGeneratorSchema as Schema;

class FileGeneratorSchema extends Schema {
	// ...
}
```
Update the file `configs/amethyst.file-generator` with the new class
```php
return [
    'data' => [
        'file-generator' => [
            'schema' => App\Schemas\FileGeneratorSchema::class,
        ],
    ]
];
```

---
[Back](index.md)