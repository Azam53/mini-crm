<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use App\Events\QuoteMail;

class QuoteMailFired
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
    public function handle(QuoteMail $event)
    {

         $services = $event->service;
         $email    = $event->email;
         $total    = $event->total;

          Mail::send('email.quotation', ['email' => $email,'total' => $total,'services' => $services, 'quoteId' =>$event->quoteId ], function ($message) use($services)
        {
           // $message->to($data['email'], $data['name'])->subject('Welcome to Expertphp.in!');
              $message->to('azam@infris.nl')->subject('Quotation Details');

        
        });

    }
}
