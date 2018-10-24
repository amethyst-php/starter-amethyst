## Result

Once you've got the result you should always check if an error has occurred, if not, retrieve the resource.

```php
use Railken\Amethyst\Managers\ScheduleManager;

$manager = new ScheduleManager();

$result = $manager->create([
    "name" => "Forrest Barrows Jr.",
    "description" => "Iure id dolor non hic at sunt possimus. Iure tempora quasi ut nam rerum quia aut. Sunt et aut corrupti veniam officia qui.",
    "enabled" => 1,
    "cron" => "* * * * *",
    "work" => [
        "name" => "Maybell Kreiger",
        "payload" => [
            "dummy" => "dummy"
        ],
        "description" => "Velit et et voluptas ut ex quibusdam. Deleniti quo maxime pariatur. Officiis voluptas velit ex repudiandae voluptatem repellat."
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