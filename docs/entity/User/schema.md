## Railken\Amethyst\Schemas\UserSchema

The schema is used to define the structure of the attributes. All the $attributes in the [model](model.md) and in the [manager](manager.md) are initialized by the schema.

#### Extend the class

Create the new schema in `app/Schemas/UserSchema`
```php
class Railken\Amethyst\Schemas\UserSchema as Schema;

class UserSchema extends Schema {
	// ...
}
```
Update the file `configs/amethyst.user` with the new class
```php
return [
    'data' => [
        'user' => [
            'schema' => App\Schemas\UserSchema::class,
        ],
    ]
];
```

---
[Back](index.md)