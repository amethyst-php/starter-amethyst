## Result

Once you've got the result you should always check if an error has occurred, if not, retrieve the resource.

```php
use Railken\Amethyst\Managers\ListenerManager;

$manager = new ListenerManager();

$result = $manager->create([
    "name" => "El. psy. congroo. 1540340476.0836",
    "condition" => "{{ message is not empty ? 1 : 0 }}",
    "work" => [
        "name" => "Timmothy Paucek II",
        "payload" => [
            "class" => "Railken\\Amethyst\\Workers\\EmailWorker",
            "data" => [
                "id" => 1
            ]
        ],
        "description" => "Delectus voluptatem rerum possimus delectus officiis qui. Rerum nobis aperiam veritatis. Ipsum quasi suscipit ratione a."
    ],
    "data" => [
        "dummy1" => "dummy2"
    ],
    "event_class" => "Dummy"
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