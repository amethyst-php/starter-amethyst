<?php

namespace App\Providers;

use App\Events\NotificationEvent;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Railken\Amethyst\Notifications\BaseNotification;

class AmethystServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        Event::listen([\Railken\Amethyst\Events\ExporterGenerated::class, \Railken\Amethyst\Events\FileGenerator\FileGenerated::class], function ($event) {
            if (!($event->agent instanceof \Railken\Lem\Agents\SystemAgent)) {
                $file = $event->file;

                $url = $file->media[0]->disk === 's3' ? $file->media[0]->getTemporaryUrl(new \DateTime('+1 hour')) : $file->media[0]->getFullUrl();

                $event->agent->notify(new BaseNotification($event, 'The file is now ready. Hurry up!', ['url' => $url]));
                event(new NotificationEvent($event->agent, config('app.name'), 'The file is now ready. Hurry up!'));
            }
        });

        Event::listen([\Railken\Amethyst\Events\ExporterFailed::class, \Railken\Amethyst\Events\FileGenerator\FileFailed::class], function ($event) {
            if (!($event->agent instanceof \Railken\Lem\Agents\SystemAgent)) {
                $event->agent->notify(new BaseNotification($event, 'An error has occurred', ['error' => [
                    'message' => $event->error->message,
                ]]));

                event(new NotificationEvent($event->agent, config('app.name'), 'An error has occurred'));
            }
        });
    }
}
