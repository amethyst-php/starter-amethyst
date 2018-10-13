# Starter Amethyst

[![Build Status](https://travis-ci.org/railken/starter-amethyst.svg?branch=master)](https://travis-ci.org/railken/starter-amethyst)

This is the starter pack of the [Amethyst](https://github.com/railken/amethyst), a [Laravel](https://github.com/laravel/laravel) based project.

## Installation

Download the project:

    git clone https://github.com/railken/starter-amethyst [project-name]


Follow the [guide](docs/installation.md) (skip if you're already familiar with laravel).


Test with phpunit:

    ./vendor/bin/phpunit

Install the application:

    php artisan migrate
    php artisan install

Test the index endpoint

    curl -X GET ttp://localhost:8000/api


## Packages
This starter include the following packages:
 - [authentication](https://github.com/railken/amethyst-authentication)
 - [account](https://github.com/railken/amethyst-account)
 - [config](https://github.com/railken/amethyst-config)
 - [custom-page](https://github.com/railken/amethyst-custom-page)
 - [data-builder](https://github.com/railken/amethyst-data-builder)
 - [email-log](https://github.com/railken/amethyst-email-log)
 - [email-sender](https://github.com/railken/amethyst-email-sender)
 - [file](https://github.com/railken/amethyst-file)
 - [file-generator](https://github.com/railken/amethyst-file-generator)
 - [listener](https://github.com/railken/amethyst-listener)
 - [notification](https://github.com/railken/amethyst-notification)
 - [schedule](https://github.com/railken/amethyst-schedule)
 - [template](https://github.com/railken/amethyst-template)
 - [user](https://github.com/railken/amethyst-user)
 - [work](https://github.com/railken/amethyst-work)


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
