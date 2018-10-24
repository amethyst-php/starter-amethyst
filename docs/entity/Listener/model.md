## Railken\Amethyst\Models\Listener

The model extends ```Illuminate\Database\Eloquent\Model``` class.

#### Update the table name
You have to go in the file `configs/amethyst.listener` in order to change the table name.

#### Extend the class

Create the new model in `app/Models/Listener`
```php
class Railken\Amethyst\Models\Listener as Model;

class Listener extends Model {
	// ...
}
```
Update the file `configs/amethyst.listener` with the new class
```php
return [
    'data' => [
        'listener' => [
            'model' => App\Models\Listener::class,
        ],
    ]
];
```

---
[Back](index.md)