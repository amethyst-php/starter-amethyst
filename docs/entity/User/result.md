## Result

Once you've got the result you should always check if an error has occurred, if not, retrieve the resource.

```php
use Railken\Amethyst\Managers\UserManager;

$manager = new UserManager();

$result = $manager->create([
    "name" => "Ana Nader",
    "email" => "hodkiewicz.wilma@gmail.com",
    "password" => "7A0XtF3GNYLTk4OO",
    "notes" => "Quia repellat est at dolorem maiores. Error assumenda libero enim odio. Molestiae labore repellat nisi sit aut ullam quasi. Reprehenderit et quo at veritatis suscipit."
]);

if ($result->ok()) {

    $resource = $result->getResource();

} else {

    // Loop through all errors
    $result->getErrors()->map(function($error) {
        return $error->toArray();
    }))

    // Retrieve an array of all errors
    $result->getSimpleErrors();

    /* The result is something like this:

        [0] => Array
            (
                [code] => FIELD_NOT_DEFINED
                [label] => field
                [message] => The field is required
                [value] =>
            )
    */

}
```

---
[Back](index.md)