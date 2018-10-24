## Railken\Amethyst\Models\Schedule

The model extends ```Illuminate\Database\Eloquent\Model``` class.

#### Update the table name
You have to go in the file `configs/amethyst.schedule` in order to change the table name.

#### Extend the class

Create the new model in `app/Models/Schedule`
```php
class Railken\Amethyst\Models\Schedule as Model;

class Schedule extends Model {
	// ...
}
```
Update the file `configs/amethyst.schedule` with the new class
```php
return [
    'data' => [
        'schedule' => [
            'model' => App\Models\Schedule::class,
        ],
    ]
];
```

---
[Back](index.md)