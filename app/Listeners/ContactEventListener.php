<?php

namespace App\Listeners;

use App\Events\ContactEvent;
use App\Mail\ContactUs;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class ContactEventListener
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
     * @param  ContactEvent  $event
     * @return void
     */
    public function handle(ContactEvent $event)
    {
        $data = $event->data;
        Mail::to($data['email'])->send(new ContactUs($data));
    }
}
