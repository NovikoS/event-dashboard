<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Events\Dispatcher;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Napopravku\EventMonitor\Events\EventInterface;

class EventMonitorJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public EventInterface $event;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(EventInterface $event)
    {
        $this->event = $event;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Dispatcher $eventDispatcher)
    {
        $eventDispatcher->dispatch($this->event);
    }
}
