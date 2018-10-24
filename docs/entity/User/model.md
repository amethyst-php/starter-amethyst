## Railken\Amethyst\Models\User

The model extends ```Illuminate\Database\Eloquent\Model``` class.

#### Update the table name
You have to go in the file `configs/amethyst.user` in order to change the table name.

#### Extend the class

Create the new model in `app/Models/User`
```php
class Railken\Amethyst\Models\User as Model;

class User extends Model {
	// ...
}
```
Update the file `configs/amethyst.user` with the new class
```php
return [
    'data' => [
        'user' => [
            'model' => App\Models\User::class,
        ],
    ]
];
```

---
[Back](index.md)