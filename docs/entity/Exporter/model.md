## Railken\Amethyst\Models\Exporter

The model extends ```Illuminate\Database\Eloquent\Model``` class.

#### Update the table name
You have to go in the file `configs/amethyst.exporter` in order to change the table name.

#### Extend the class

Create the new model in `app/Models/Exporter`
```php
class Railken\Amethyst\Models\Exporter as Model;

class Exporter extends Model {
	// ...
}
```
Update the file `configs/amethyst.exporter` with the new class
```php
return [
    'data' => [
        'exporter' => [
            'model' => App\Models\Exporter::class,
        ],
    ]
];
```

---
[Back](index.md)