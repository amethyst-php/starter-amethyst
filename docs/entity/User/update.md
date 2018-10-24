## Update 


Define a new instance of the [Manager](manager.md)

```php
use Railken\Amethyst\Managers\UserManager;

$manager = new UserManager();
```

Retrieve an [entity](model.md) using the [repository](repository.md)


```php
$entity = $manager->getRepository()->findOneById(1);
```

Update an existent [entity](model.md)

```php
$params = [
    "name" => "Ana Nader",
    "email" => "hodkiewicz.wilma@gmail.com",
    "password" => "7A0XtF3GNYLTk4OO",
    "notes" => "Quia repellat est at dolorem maiores. Error assumenda libero enim odio. Molestiae labore repellat nisi sit aut ullam quasi. Reprehenderit et quo at veritatis suscipit."
];

$result = $manager->update($params);
```

* [Attributes](attributes.md)
* [Errors](errors.md)
* [Performing queries with the Repository](repository.md)
* [Handle the result](result.md)

---
[Back](index.md)