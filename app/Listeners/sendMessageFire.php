<?php

namespace App\Listeners;

use App\Events\sendMessageEvent;
use App\Mail\sendMessage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class sendMessageFire
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(sendMessageEvent $event): void
    {
        Mail::to('dev.hasanjasser@gmail.com')->send(new sendMessage( $event->name, $event->content, $event->subject));
    }
}
