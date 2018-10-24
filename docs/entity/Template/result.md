## Result

Once you've got the result you should always check if an error has occurred, if not, retrieve the resource.

```php
use Railken\Amethyst\Managers\TemplateManager;

$manager = new TemplateManager();

$result = $manager->create([
    "name" => "a common name0.07059200 1540340476",
    "filename" => "test.pdf",
    "filetype" => "application/pdf",
    "description" => "A description",
    "content" => "The cake is a {{ message }}",
    "data_builder" => [
        "name" => "Savannah Keeling",
        "description" => "Sed debitis quos sed ut doloremque totam dolor. Est sunt dolore pariatur animi vero. Et perspiciatis quos a amet nulla optio blanditiis.",
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