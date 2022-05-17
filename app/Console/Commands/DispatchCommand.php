<?php

namespace App\Console\Commands;

use App\Jobs\EventMonitorJob;
use Illuminate\Console\Command;
use Napopravku\EventMonitor\Data\AbstractData;
use Napopravku\EventMonitor\Events\MockResultEvent;

class DispatchCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tst';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    public function handle()
    {
        $data = new AbstractData();
        $data->jobId = 'qqwrqwr952359uge7w';
        $job = new EventMonitorJob(new MockResultEvent($data));
        dispatch($job);
    }
}
