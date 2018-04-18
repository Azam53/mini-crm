<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Quote;
use Illuminate\Support\Facades\Mail;
use App\Events\ChatNotification;

class ChatMailFired
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
     * @param  object  $event
     * @return void
     */
    public function handle(ChatNotification $event)
    {
          // to fetch all comments from quote

        //$comments = Quote::where('depth', $event->quoteId)->get();

         $quoteId = $event->quoteId;

         Mail::send('email.chatNotification', ['quoteId' => $quoteId ], function ($message)
        {
           // $message->to($data['email'], $data['name'])->subject('Welcome to Expertphp.in!');
              $message->to('azam@infris.nl')->subject('Quotation chat Notification');

        
        });

    }
}
