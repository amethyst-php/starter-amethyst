# Documentation

- [Installation](installation.md)
- Data
    - [Notification](entity/Notification/index.md)
    - [User](entity/User/index.md)
    - [Config](entity/Config/index.md)
    - [CustomPage](entity/CustomPage/index.md)
    - [EmailLog](entity/EmailLog/index.md)
    - [File](entity/File/index.md)
    - [DataBuilder](entity/DataBuilder/index.md)
    - [Exporter](entity/Exporter/index.md)
    - [Template](entity/Template/index.md)
    - [EmailSender](entity/EmailSender/index.md)
    - [FileGenerator](entity/FileGenerator/index.md)
    - [Work](entity/Work/index.md)
    - [Listener](entity/Listener/index.md)
    - [Schedule](entity/Schedule/index.md)

Test with phpunit:

    ./vendor/bin/phpunit

Install the application:

    php artisan migrate
    php artisan install

Test the index endpoint

    curl -X GET http://localhost:8000/api