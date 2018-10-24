## Railken\Amethyst\Schemas\TemplateSchema

The schema is used to define the structure of the attributes. All the $attributes in the [model](model.md) and in the [manager](manager.md) are initialized by the schema.

#### Extend the class

Create the new schema in `app/Schemas/TemplateSchema`
```php
class Railken\Amethyst\Schemas\TemplateSchema as Schema;

class TemplateSchema extends Schema {
	// ...
}
```
Update the file `configs/amethyst.template` with the new class
```php
return [
    'data' => [
        'template' => [
            'schema' => App\Schemas\TemplateSchema::class,
        ],
    ]
];
```

---
[Back](index.md)