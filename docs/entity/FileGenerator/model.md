## Railken\Amethyst\Models\FileGenerator

The model extends ```Illuminate\Database\Eloquent\Model``` class.

#### Update the table name
You have to go in the file `configs/amethyst.file-generator` in order to change the table name.

#### Extend the class

Create the new model in `app/Models/FileGenerator`
```php
class Railken\Amethyst\Models\FileGenerator as Model;

class FileGenerator extends Model {
	// ...
}
```
Update the file `configs/amethyst.file-generator` with the new class
```php
return [
    'data' => [
        'file-generator' => [
            'model' => App\Models\FileGenerator::class,
        ],
    ]
];
```

---
[Back](index.md)