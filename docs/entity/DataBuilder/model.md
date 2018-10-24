## Railken\Amethyst\Models\DataBuilder

The model extends ```Illuminate\Database\Eloquent\Model``` class.

#### Update the table name
You have to go in the file `configs/amethyst.data-builder` in order to change the table name.

#### Extend the class

Create the new model in `app/Models/DataBuilder`
```php
class Railken\Amethyst\Models\DataBuilder as Model;

class DataBuilder extends Model {
	// ...
}
```
Update the file `configs/amethyst.data-builder` with the new class
```php
return [
    'data' => [
        'data-builder' => [
            'model' => App\Models\DataBuilder::class,
        ],
    ]
];
```

---
[Back](index.md)