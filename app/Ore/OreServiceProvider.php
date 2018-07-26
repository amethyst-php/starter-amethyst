<?php

namespace App\Ore;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Railken\LaraOre\Notifications\BaseNotification;

class OreServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        Event::listen([\Railken\LaraOre\Events\TemplateViewUpdated::class], function ($event) {
            Artisan::call('queue:restart');
        });

        Event::listen([\Railken\LaraOre\Events\ExporterGenerated::class, \Railken\LaraOre\Events\FileGenerator\FileGenerated::class], function ($event) {
            $file = $event->file;

            $url = $file->media[0]->disk === 's3' ? $file->media[0]->getTemporaryUrl(new \DateTime('+1 hour')) : $file->media[0]->getUrl();

            $event->agent->notify(new BaseNotification($event, 'Your file is ready', ['url' => $url]));
        });

        Event::listen([\Railken\LaraOre\Events\ExporterFailed::class, \Railken\LaraOre\Events\FileGenerator\FileFailed::class], function ($event) {
            $event->agent->notify(new BaseNotification($event, 'An error has occurred', ['error' => [
                'message' => $event->error->message,
            ]]));
        });
    }
}
