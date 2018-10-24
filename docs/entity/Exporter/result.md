## Result

Once you've got the result you should always check if an error has occurred, if not, retrieve the resource.

```php
use Railken\Amethyst\Managers\ExporterManager;

$manager = new ExporterManager();

$result = $manager->create([
    "name" => "Emmett Berge",
    "description" => "Dolorem dolor rerum consequuntur mollitia. Ipsum ut cupiditate at est dolore quia. Et aut est dicta rerum.",
    "data_builder" => [
        "name" => "Domenick Gerlach",
        "description" => "Earum dolore asperiores voluptatem totam ut. Omnis cum quia aspernatur laboriosam blanditiis non iure. Et sit sint expedita possimus nam dolorem eligendi.",
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
    ],
    "filename" => "exporters-{{ \"now\"|date(\"Ymd\") }}",
    "class_name" => "Railken\\Amethyst\\Jobs\\GenerateExportCsv",
    "body" => [
        "name" => "{{ record.name }}",
        "flag" => 2
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