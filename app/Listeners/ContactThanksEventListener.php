<?php

namespace App\Listeners;

use App\Events\ContactThanksEvent;
use App\Mail\ContactThanks;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class ContactThanksEventListener
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
     * @param  ContactThanksEvent  $event
     * @return void
     */
    public function handle(ContactThanksEvent $event)
    {
        $data = $event->data;
        Mail::to($data['email'])->send(new ContactThanks($data));
    }
}
