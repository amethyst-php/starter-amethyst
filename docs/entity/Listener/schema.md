## Railken\Amethyst\Schemas\ListenerSchema

The schema is used to define the structure of the attributes. All the $attributes in the [model](model.md) and in the [manager](manager.md) are initialized by the schema.

#### Extend the class

Create the new schema in `app/Schemas/ListenerSchema`
```php
class Railken\Amethyst\Schemas\ListenerSchema as Schema;

class ListenerSchema extends Schema {
	// ...
}
```
Update the file `configs/amethyst.listener` with the new class
```php
return [
    'data' => [
        'listener' => [
            'schema' => App\Schemas\ListenerSchema::class,
        ],
    ]
];
```

---
[Back](index.md)