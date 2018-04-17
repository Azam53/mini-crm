<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class QuoteMail
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
     public $service, $total, $email, $quoteId;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($service,$total,$email,$quoteId)
    {
        $this->service = $service;
        $this->total = $total;
        $this->email = $email;
        $this->quoteId = $quoteId;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
