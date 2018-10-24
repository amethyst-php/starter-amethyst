## Result

Once you've got the result you should always check if an error has occurred, if not, retrieve the resource.

```php
use Railken\Amethyst\Managers\EmailSenderManager;

$manager = new EmailSenderManager();

$result = $manager->create([
    "name" => "Dr. Maryse Wilderman PhD",
    "description" => "Culpa dolorum recusandae rerum doloremque. Doloribus incidunt ut rerum quasi repellat modi dolor. Odit quibusdam quasi officiis. Possimus tenetur neque ut dolorum et nesciunt.",
    "data_builder" => [
        "name" => "Gabriel Stark",
        "description" => "Nihil ut est fuga. Animi est quibusdam commodi et fuga id aut. Autem at consectetur quod dolores et. Quidem voluptate fuga nisi rem at.",
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
            "class_name" => "Railken\\Amethyst\\DataBuilders\\EmailSenderDataBuilder"
        ]
    ],
    "subject" => "test",
    "body" => "test",
    "sender" => "test@test.net",
    "recipients" => "test@test.net",
    "attachments" => [
        [
            "as" => "test.txt",
            "source" => "file"
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