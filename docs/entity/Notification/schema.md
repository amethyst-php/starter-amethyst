## Railken\Amethyst\Schemas\NotificationSchema

The schema is used to define the structure of the attributes. All the $attributes in the [model](model.md) and in the [manager](manager.md) are initialized by the schema.

#### Extend the class

Create the new schema in `app/Schemas/NotificationSchema`
```php
class Railken\Amethyst\Schemas\NotificationSchema as Schema;

class NotificationSchema extends Schema {
	// ...
}
```
Update the file `configs/amethyst.notification` with the new class
```php
return [
    'data' => [
        'notification' => [
            'schema' => App\Schemas\NotificationSchema::class,
        ],
    ]
];
```

---
[Back](index.md)