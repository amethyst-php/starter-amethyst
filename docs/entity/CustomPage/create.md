## Create

Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\CustomPageManager;

$manager = new CustomPageManager();
```

Create a new [entity](model.md)

```php
$params = [
    "name" => "Susana Witting MD",
    "config" => [
        "test" => "test"
    ],
    "category" => "Ofelia Steuber",
    "html" => "Welcome <p>test</p>",
    "url" => "welcome",
    "label" => "Welcome",
    "description" => "Et velit cum harum veritatis dolorem eos modi molestias. Facilis aperiam ut dolorem. Non molestias ut fugiat ea dolor."
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
    "name" => "Susana Witting MD",
    "config" => [
        "test" => "test"
    ],
    "category" => "Ofelia Steuber",
    "html" => "Welcome <p>test</p>",
    "url" => "welcome",
    "label" => "Welcome",
    "description" => "Et velit cum harum veritatis dolorem eos modi molestias. Facilis aperiam ut dolorem. Non molestias ut fugiat ea dolor."
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