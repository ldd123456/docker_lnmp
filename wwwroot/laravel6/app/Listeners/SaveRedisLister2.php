<?php


namespace App\Listeners;


use App\Events\SaveRedis;
use Illuminate\Support\Facades\Log;

class SaveRedisLister2
{
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
        return false;
        $id = $event->id + 333;
        Log::debug('i am listers' . $id);
    }
}