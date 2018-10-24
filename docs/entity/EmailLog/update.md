## Update 


Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\EmailLogManager;

$manager = new EmailLogManager();
```

Retrieve an [entity](model.md) using the [repository](repository.md)


```php
$entity = $manager->getRepository()->findOneById(1);
```

Update an existent [entity](model.md)

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

$result = $manager->update($params);
```

* [Attributes](attributes.md)
* [Errors](errors.md)
* [Performing queries with the Repository](repository.md)
* [Handle the result](result.md)

---
[Back](index.md)