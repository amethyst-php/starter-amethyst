## Result

Once you've got the result you should always check if an error has occurred, if not, retrieve the resource.

```php
use Railken\Amethyst\Managers\FileGeneratorManager;

$manager = new FileGeneratorManager();

$result = $manager->create([
    "name" => "Bernadette Gibson",
    "description" => "Fugiat quis laborum dolor dolore suscipit maiores sed magni. Minima qui molestias ipsa. Possimus et culpa laborum nihil quod quidem.",
    "data_builder" => [
        "name" => "Dr. Elliott Durgan Sr.",
        "description" => "Minus blanditiis odit aut quae harum voluptatem. Maxime eum et expedita omnis error. Voluptatum numquam necessitatibus explicabo.",
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
        ],
        "data_builder" => [
            "class_name" => "Railken\\Amethyst\\DataBuilders\\FileGeneratorDataBuilder"
        ]
    ],
    "filename" => "users-{{ \"now\"|date(\"Ymd\") }}",
    "filetype" => "text/plain",
    "body" => "test"
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