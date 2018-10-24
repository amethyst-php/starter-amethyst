## Update 


Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\ConfigManager;

$manager = new ConfigManager();
```

Retrieve an [entity](model.md) using the [repository](repository.md)


```php
$entity = $manager->getRepository()->findOneById(1);
```

Update an existent [entity](model.md)

```php
$params = [
    "key" => "Mrs. Mabel Howe",
    "value" => "vQR]1a[I),VU[",
    "visibility" => "public"
];

$result = $manager->update($params);
```

* [Attributes](attributes.md)
* [Errors](errors.md)
* [Performing queries with the Repository](repository.md)
* [Handle the result](result.md)

---
[Back](index.md)