<?php

namespace App\Listeners;

use App\Events\TestEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class TestEventListener
{
    public function __construct()
    { }

    public function handle(TestEvent $event): void
    {
        Log::channel('event')->info($event->message);
    }
}
