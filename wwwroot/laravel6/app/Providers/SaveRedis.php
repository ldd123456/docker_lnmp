<?php

namespace App\Providers;

use App\Http\Controllers\IndexController;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SaveRedis
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
     * @param  IndexController  $event
     * @return void
     */
    public function handle(IndexController $event)
    {
        //
    }
}
