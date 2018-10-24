## Update 


Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\FileManager;

$manager = new FileManager();
```

Retrieve an [entity](model.md) using the [repository](repository.md)


```php
$entity = $manager->getRepository()->findOneById(1);
```

Update an existent [entity](model.md)

```php
$params = [
    "name" => "test.txt",
    "file" => "F4RD711lIXF04qTAxzaH5MbN8erYOUsjtC0kjeaC"
];

$result = $manager->update($params);
```

* [Attributes](attributes.md)
* [Errors](errors.md)
* [Performing queries with the Repository](repository.md)
* [Handle the result](result.md)

---
[Back](index.md)