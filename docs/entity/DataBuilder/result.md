## Result

Once you've got the result you should always check if an error has occurred, if not, retrieve the resource.

```php
use Railken\Amethyst\Managers\DataBuilderManager;

$manager = new DataBuilderManager();

$result = $manager->create([
    "name" => "Mariam Keebler",
    "description" => "Libero provident nobis cupiditate omnis officiis sequi. Non similique sed eaque rerum.",
    "class_name" => "Railken\\Amethyst\\DataBuilders\\DummyDataBuilder",
    "filter" => "id eq 1",
    "input" => [
        "date" => [
            "type" => "date",
            "validation" => "date_format:Y-m-d"
        ]
    ],
    "mock_data" => [
        "date" => "2018-01-01"
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