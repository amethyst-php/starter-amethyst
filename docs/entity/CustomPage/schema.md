## Railken\Amethyst\Schemas\CustomPageSchema

The schema is used to define the structure of the attributes. All the $attributes in the [model](model.md) and in the [manager](manager.md) are initialized by the schema.

#### Extend the class

Create the new schema in `app/Schemas/CustomPageSchema`
```php
class Railken\Amethyst\Schemas\CustomPageSchema as Schema;

class CustomPageSchema extends Schema {
	// ...
}
```
Update the file `configs/amethyst.custom-page` with the new class
```php
return [
    'data' => [
        'custom-page' => [
            'schema' => App\Schemas\CustomPageSchema::class,
        ],
    ]
];
```

---
[Back](index.md)