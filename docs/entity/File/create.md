## Create

Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\FileManager;

$manager = new FileManager();
```

Create a new [entity](model.md)

```php
$params = [
    "name" => "test.txt",
    "file" => "F4RD711lIXF04qTAxzaH5MbN8erYOUsjtC0kjeaC"
];

$result = $manager->create($params);
```

Check the result of the operation

```php
if ($result->ok()) {
    // All ok
} else {
    // Something goes wrong
}
```

Retrieve the [entity](model.md) from the [result](result.md)

```php
$entity = $result->getResource();
```

Throw an exception immediately if the operation fails

```php
use Railken\Lem\Exceptions\Exception;

$params = [
    "name" => "test.txt",
    "file" => "F4RD711lIXF04qTAxzaH5MbN8erYOUsjtC0kjeaC"
];
   
try {
    $result = $manager->createOrFail($params);
} catch (Exception $e) {
    // ...
}
```

### Links
* [Attributes](attributes.md)
* [Errors](errors.md)
* [Handle the result](result.md)

---
[Back](index.md)