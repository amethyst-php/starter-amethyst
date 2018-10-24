## Railken\Amethyst\Models\EmailLog

The model extends ```Illuminate\Database\Eloquent\Model``` class.

#### Update the table name
You have to go in the file `configs/amethyst.email-log` in order to change the table name.

#### Extend the class

Create the new model in `app/Models/EmailLog`
```php
class Railken\Amethyst\Models\EmailLog as Model;

class EmailLog extends Model {
	// ...
}
```
Update the file `configs/amethyst.email-log` with the new class
```php
return [
    'data' => [
        'email-log' => [
            'model' => App\Models\EmailLog::class,
        ],
    ]
];
```

---
[Back](index.md)