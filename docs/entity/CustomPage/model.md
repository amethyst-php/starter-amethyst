## Railken\Amethyst\Models\CustomPage

The model extends ```Illuminate\Database\Eloquent\Model``` class.

#### Update the table name
You have to go in the file `configs/amethyst.custom-page` in order to change the table name.

#### Extend the class

Create the new model in `app/Models/CustomPage`
```php
class Railken\Amethyst\Models\CustomPage as Model;

class CustomPage extends Model {
	// ...
}
```
Update the file `configs/amethyst.custom-page` with the new class
```php
return [
    'data' => [
        'custom-page' => [
            'model' => App\Models\CustomPage::class,
        ],
    ]
];
```

---
[Back](index.md)