## Create

Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\EmailLogManager;

$manager = new EmailLogManager();
```

Create a new [entity](model.md)

```php
$params = [
    "from" => "test@test.net",
    "to" => [
        "test@test.net"
    ],
    "cc" => [
        "test1@test.net"
    ],
    "bcc" => [
        "test2@test.net"
    ],
    "subject" => "Welcome",
    "body" => "Hello"
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
    "from" => "test@test.net",
    "to" => [
        "test@test.net"
    ],
    "cc" => [
        "test1@test.net"
    ],
    "bcc" => [
        "test2@test.net"
    ],
    "subject" => "Welcome",
    "body" => "Hello"
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