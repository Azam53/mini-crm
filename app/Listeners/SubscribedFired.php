<?php

namespace App\Listeners;

use App\Events\Subscribed;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Subscription;
use Illuminate\Support\Facades\Mail;

class SubscribedFired
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
     * @param  Subscribed  $event
     * @return void
     */
    public function handle(Subscribed $event)
    {
        $subscription = Subscription::find($event->subscription)->toArray();

        Mail::raw('Subscription successfull', $subscription, function($message) use ($subscription) {
            //$message->to($user['email']);
            $message->to('azam@infris.nl');
            $message->subject('Subscription notification');
        });

    }
}
