## Railken\Amethyst\Models\Config

The model extends ```Illuminate\Database\Eloquent\Model``` class.

#### Update the table name
You have to go in the file `configs/amethyst.config` in order to change the table name.

#### Extend the class

Create the new model in `app/Models/Config`
```php
class Railken\Amethyst\Models\Config as Model;

class Config extends Model {
	// ...
}
```
Update the file `configs/amethyst.config` with the new class
```php
return [
    'data' => [
        'config' => [
            'model' => App\Models\Config::class,
        ],
    ]
];
```

---
[Back](index.md)