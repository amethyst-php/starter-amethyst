## Railken\Amethyst\Schemas\EmailLogSchema

The schema is used to define the structure of the attributes. All the $attributes in the [model](model.md) and in the [manager](manager.md) are initialized by the schema.

#### Extend the class

Create the new schema in `app/Schemas/EmailLogSchema`
```php
class Railken\Amethyst\Schemas\EmailLogSchema as Schema;

class EmailLogSchema extends Schema {
	// ...
}
```
Update the file `configs/amethyst.email-log` with the new class
```php
return [
    'data' => [
        'email-log' => [
            'schema' => App\Schemas\EmailLogSchema::class,
        ],
    ]
];
```

---
[Back](index.md)