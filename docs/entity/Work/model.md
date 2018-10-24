## Railken\Amethyst\Models\Work

The model extends ```Illuminate\Database\Eloquent\Model``` class.

#### Update the table name
You have to go in the file `configs/amethyst.work` in order to change the table name.

#### Extend the class

Create the new model in `app/Models/Work`
```php
class Railken\Amethyst\Models\Work as Model;

class Work extends Model {
	// ...
}
```
Update the file `configs/amethyst.work` with the new class
```php
return [
    'data' => [
        'work' => [
            'model' => App\Models\Work::class,
        ],
    ]
];
```

---
[Back](index.md)