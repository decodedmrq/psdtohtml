<?php

namespace App\Events;

use App\Models\Guest;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewMailRegisteredEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $guest;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Guest $guest)
    {
        $this->guest = $guest;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
