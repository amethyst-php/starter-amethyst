## Railken\Amethyst\Schemas\ConfigSchema

The schema is used to define the structure of the attributes. All the $attributes in the [model](model.md) and in the [manager](manager.md) are initialized by the schema.

#### Extend the class

Create the new schema in `app/Schemas/ConfigSchema`
```php
class Railken\Amethyst\Schemas\ConfigSchema as Schema;

class ConfigSchema extends Schema {
	// ...
}
```
Update the file `configs/amethyst.config` with the new class
```php
return [
    'data' => [
        'config' => [
            'schema' => App\Schemas\ConfigSchema::class,
        ],
    ]
];
```

---
[Back](index.md)