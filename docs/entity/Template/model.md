## Railken\Amethyst\Models\Template

The model extends ```Illuminate\Database\Eloquent\Model``` class.

#### Update the table name
You have to go in the file `configs/amethyst.template` in order to change the table name.

#### Extend the class

Create the new model in `app/Models/Template`
```php
class Railken\Amethyst\Models\Template as Model;

class Template extends Model {
	// ...
}
```
Update the file `configs/amethyst.template` with the new class
```php
return [
    'data' => [
        'template' => [
            'model' => App\Models\Template::class,
        ],
    ]
];
```

---
[Back](index.md)