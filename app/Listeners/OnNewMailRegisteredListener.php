<?php

namespace App\Listeners;

use App\Events\NewMailRegisteredEvent;
use App\Jobs\SendMailToNewGuestJob;

class OnNewMailRegisteredListener
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
     * @param  NewMailRegisteredEvent $event
     * @return void
     */
    public function handle(NewMailRegisteredEvent $event)
    {
        dispatch(new SendMailToNewGuestJob($event->guest));
    }
}
