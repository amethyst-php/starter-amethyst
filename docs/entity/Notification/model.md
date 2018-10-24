## Railken\Amethyst\Models\Notification

The model extends ```Illuminate\Database\Eloquent\Model``` class.

#### Update the table name
You have to go in the file `configs/amethyst.notification` in order to change the table name.

#### Extend the class

Create the new model in `app/Models/Notification`
```php
class Railken\Amethyst\Models\Notification as Model;

class Notification extends Model {
	// ...
}
```
Update the file `configs/amethyst.notification` with the new class
```php
return [
    'data' => [
        'notification' => [
            'model' => App\Models\Notification::class,
        ],
    ]
];
```

---
[Back](index.md)