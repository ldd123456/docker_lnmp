<?php

namespace App\Listeners;

use App\Events\SaveRedis;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SaveRedisLister implements ShouldQueue
{
    /**
     * 任务连接名称。
     *
     * @var string|null
     */
    public $connection = 'redis';

    /**
     * 任务发送到的队列的名称.
     *
     * @var string|null
     */
    public $queue = 'listeners';

    /**
     * 处理任务的延迟时间.
     *
     * @var int
     */
    public $delay = 8;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SaveRedis  $event
     * @return void
     */
    public function handle(SaveRedis $event)
    {
        $id = $event->id + 222;
        Log::debug('i am listers' . $id);
    }

    /**
     * 处理失败任务
     *
     * @param  \App\Events\OrderShipped  $event
     * @param  \Exception  $exception
     * @return void
     */
    public function failed(OrderShipped $event, $exception)
    {
        Log::debug('failed');
    }
}
