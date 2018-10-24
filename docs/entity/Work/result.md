## Result

Once you've got the result you should always check if an error has occurred, if not, retrieve the resource.

```php
use Railken\Amethyst\Managers\WorkManager;

$manager = new WorkManager();

$result = $manager->create([
    "name" => "Dawn Bosco",
    "payload" => [
        "dummy" => "dummy"
    ],
    "description" => "Quia et quis cumque qui est cum ab. Sunt et sit quos cum impedit ipsum et. Rerum sint unde velit cum corporis tempora minus excepturi."
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