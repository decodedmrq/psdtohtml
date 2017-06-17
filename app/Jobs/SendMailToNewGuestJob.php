<?php

namespace App\Jobs;

use App\Models\Guest;
use App\Notifications\ThanksForRegisteredNotification;

class SendMailToNewGuestJob extends Job
{
    public $guest;

    public function __construct(Guest $guest)
    {
        $this->guest = $guest;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->guest->notify(new ThanksForRegisteredNotification($this->guest));
    }
}
