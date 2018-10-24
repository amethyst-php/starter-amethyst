## Result

Once you've got the result you should always check if an error has occurred, if not, retrieve the resource.

```php
use Railken\Amethyst\Managers\NotificationManager;

$manager = new NotificationManager();

$result = $manager->create([
    "id" => "00a76d64-822a-4621-9279-72ceff67f439",
    "type" => "Railken\\Amethyst\\Notifications\\BaseNotification",
    "notifiable_type" => "App\\User",
    "notifiable_id" => 1,
    "data" => [
        "message" => "A notification."
    ]
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