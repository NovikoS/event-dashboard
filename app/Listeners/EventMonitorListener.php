<?php

namespace App\Listeners;

use App\Models\EventDashboard;
use Napopravku\EventMonitor\Events\EventInterface;

class EventMonitorListener
{
    public function handle(EventInterface $event)
    {
        $monitor = new EventDashboard();
        $monitor->job_id = rand();
        $monitor->status = 'listener';
        $monitor->event_data = json_encode($event);
        $monitor->save();
    }
}
