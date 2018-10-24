## Railken\Amethyst\Schemas\DataBuilderSchema

The schema is used to define the structure of the attributes. All the $attributes in the [model](model.md) and in the [manager](manager.md) are initialized by the schema.

#### Extend the class

Create the new schema in `app/Schemas/DataBuilderSchema`
```php
class Railken\Amethyst\Schemas\DataBuilderSchema as Schema;

class DataBuilderSchema extends Schema {
	// ...
}
```
Update the file `configs/amethyst.data-builder` with the new class
```php
return [
    'data' => [
        'data-builder' => [
            'schema' => App\Schemas\DataBuilderSchema::class,
        ],
    ]
];
```

---
[Back](index.md)