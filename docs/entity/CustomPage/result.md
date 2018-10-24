## Result

Once you've got the result you should always check if an error has occurred, if not, retrieve the resource.

```php
use Railken\Amethyst\Managers\CustomPageManager;

$manager = new CustomPageManager();

$result = $manager->create([
    "name" => "Susana Witting MD",
    "config" => [
        "test" => "test"
    ],
    "category" => "Ofelia Steuber",
    "html" => "Welcome <p>test</p>",
    "url" => "welcome",
    "label" => "Welcome",
    "description" => "Et velit cum harum veritatis dolorem eos modi molestias. Facilis aperiam ut dolorem. Non molestias ut fugiat ea dolor."
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