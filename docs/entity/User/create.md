## Create

Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\UserManager;

$manager = new UserManager();
```

Create a new [entity](model.md)

```php
$params = [
    "name" => "Ana Nader",
    "email" => "hodkiewicz.wilma@gmail.com",
    "password" => "7A0XtF3GNYLTk4OO",
    "notes" => "Quia repellat est at dolorem maiores. Error assumenda libero enim odio. Molestiae labore repellat nisi sit aut ullam quasi. Reprehenderit et quo at veritatis suscipit."
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
    "name" => "Ana Nader",
    "email" => "hodkiewicz.wilma@gmail.com",
    "password" => "7A0XtF3GNYLTk4OO",
    "notes" => "Quia repellat est at dolorem maiores. Error assumenda libero enim odio. Molestiae labore repellat nisi sit aut ullam quasi. Reprehenderit et quo at veritatis suscipit."
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