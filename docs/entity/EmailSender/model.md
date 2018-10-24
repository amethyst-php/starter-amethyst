## Railken\Amethyst\Models\EmailSender

The model extends ```Illuminate\Database\Eloquent\Model``` class.

#### Update the table name
You have to go in the file `configs/amethyst.email-sender` in order to change the table name.

#### Extend the class

Create the new model in `app/Models/EmailSender`
```php
class Railken\Amethyst\Models\EmailSender as Model;

class EmailSender extends Model {
	// ...
}
```
Update the file `configs/amethyst.email-sender` with the new class
```php
return [
    'data' => [
        'email-sender' => [
            'model' => App\Models\EmailSender::class,
        ],
    ]
];
```

---
[Back](index.md)