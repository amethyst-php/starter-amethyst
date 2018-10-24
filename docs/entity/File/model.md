## Railken\Amethyst\Models\File

The model extends ```Illuminate\Database\Eloquent\Model``` class.

#### Update the table name
You have to go in the file `configs/amethyst.file` in order to change the table name.

#### Extend the class

Create the new model in `app/Models/File`
```php
class Railken\Amethyst\Models\File as Model;

class File extends Model {
	// ...
}
```
Update the file `configs/amethyst.file` with the new class
```php
return [
    'data' => [
        'file' => [
            'model' => App\Models\File::class,
        ],
    ]
];
```

---
[Back](index.md)