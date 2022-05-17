<?php

namespace App\Providers;

use Illuminate\Queue\Events\JobProcessed;
use Illuminate\Queue\Events\JobProcessing;
use Illuminate\Queue\QueueManager;
use Illuminate\Support\ServiceProvider;
use Napopravku\EventMonitor\EventMonitor;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        if ($this->app->runningInConsole()) {

            /** @var QueueManager $manager */
            $manager = app(QueueManager::class);

            $manager->before(static function (JobProcessing $event) {
                EventMonitor::handleJobProcessing($event);
            });

            $manager->after(static function (JobProcessed $event) {
                EventMonitor::handleJobProcessed($event);
            });
        }
    }
}
