## Railken\Amethyst\Schemas\ScheduleSchema

The schema is used to define the structure of the attributes. All the $attributes in the [model](model.md) and in the [manager](manager.md) are initialized by the schema.

#### Extend the class

Create the new schema in `app/Schemas/ScheduleSchema`
```php
class Railken\Amethyst\Schemas\ScheduleSchema as Schema;

class ScheduleSchema extends Schema {
	// ...
}
```
Update the file `configs/amethyst.schedule` with the new class
```php
return [
    'data' => [
        'schedule' => [
            'schema' => App\Schemas\ScheduleSchema::class,
        ],
    ]
];
```

---
[Back](index.md)