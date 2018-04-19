<?php

namespace App\Listeners;

use App\Events\CompanyNotification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Company;
use Illuminate\Support\Facades\Mail;

class NewCompanyAdded
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
     * @param  CompanyNotification  $event
     * @return void
     */
    public function handle(CompanyNotification $event)
    {
        $company = Company::find($event->company)->toArray();

        Mail::raw('Success company added', function ($message) {
                 $message->to('azam@infris.nl')->subject('Company notification');
        });
    }
}
