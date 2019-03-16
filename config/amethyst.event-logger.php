<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Models Loggable
    |--------------------------------------------------------------------------
    |
    | An array of classes that indicates which model event should be logged
    | You can use either the class of the model or an interface
    |
    */
    'models-loggable' => [
        Railken\Amethyst\Models\User::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Events Loggable
    |--------------------------------------------------------------------------
    |
    | An array of classes that indicates which events should be logged
    | You can use either the class of the model or an interface
    |
    */
    'events-loggable' => [
        App\Events\Event::class
    ],
];
