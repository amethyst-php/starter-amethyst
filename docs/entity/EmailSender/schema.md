## Railken\Amethyst\Schemas\EmailSenderSchema

The schema is used to define the structure of the attributes. All the $attributes in the [model](model.md) and in the [manager](manager.md) are initialized by the schema.

#### Extend the class

Create the new schema in `app/Schemas/EmailSenderSchema`
```php
class Railken\Amethyst\Schemas\EmailSenderSchema as Schema;

class EmailSenderSchema extends Schema {
	// ...
}
```
Update the file `configs/amethyst.email-sender` with the new class
```php
return [
    'data' => [
        'email-sender' => [
            'schema' => App\Schemas\EmailSenderSchema::class,
        ],
    ]
];
```

---
[Back](index.md)