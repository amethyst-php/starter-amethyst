## Railken\Amethyst\Schemas\WorkSchema

The schema is used to define the structure of the attributes. All the $attributes in the [model](model.md) and in the [manager](manager.md) are initialized by the schema.

#### Extend the class

Create the new schema in `app/Schemas/WorkSchema`
```php
class Railken\Amethyst\Schemas\WorkSchema as Schema;

class WorkSchema extends Schema {
	// ...
}
```
Update the file `configs/amethyst.work` with the new class
```php
return [
    'data' => [
        'work' => [
            'schema' => App\Schemas\WorkSchema::class,
        ],
    ]
];
```

---
[Back](index.md)