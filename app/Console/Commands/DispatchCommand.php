<?php

namespace App\Console\Commands;

use App\Jobs\EventMonitorJob;
use highjin\QueueMonitor\Data\MockResultData;
use highjin\QueueMonitor\EventMonitor;
use Illuminate\Console\Command;
use highjin\QueueMonitor\Data\AbstractData;
use highjin\QueueMonitor\Events\MockResultEvent;

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
        $data = new MockResultData(['qqwt'=>'qtqwtqwt','hrejnreh'=>123215,'xzvxzv'=>'qwtqtw'],null, MockResultData::MOCK_STATUS_SENT);
        EventMonitor::mockResult($data);
    }
}
