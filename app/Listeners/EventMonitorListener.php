<?php

namespace App\Listeners;

use highjin\QueueMonitor\Events\EventInterface;
use highjin\QueueMonitor\Events\MockResultEvent;
use highjin\QueueMonitor\Models\Monitor;

class EventMonitorListener
{
    public function handle(MockResultEvent $event)
    {
        $monitor = Monitor::where('job_id', $event->data->jobUID)->first();
        $monitor->data = $event->data->data ? json_encode($event->data->data) : null;
        $monitor->exception_message = $event->data->errors ? json_encode($event->data->errors) : null;
        $monitor->save();
    }
}
