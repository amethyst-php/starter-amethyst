## Railken\Amethyst\Schemas\ExporterSchema

The schema is used to define the structure of the attributes. All the $attributes in the [model](model.md) and in the [manager](manager.md) are initialized by the schema.

#### Extend the class

Create the new schema in `app/Schemas/ExporterSchema`
```php
class Railken\Amethyst\Schemas\ExporterSchema as Schema;

class ExporterSchema extends Schema {
	// ...
}
```
Update the file `configs/amethyst.exporter` with the new class
```php
return [
    'data' => [
        'exporter' => [
            'schema' => App\Schemas\ExporterSchema::class,
        ],
    ]
];
```

---
[Back](index.md)