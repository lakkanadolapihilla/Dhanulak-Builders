<?php

namespace App\Http\Controllers\PublicArea;

use App\Events\ContactEvent;
use App\Events\ContactThanksEvent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Create contact us
     *
     * @return void
     */
    public function create(Request $request)
    {

        $email['topic'] = "Dhanulak Builders , ";
        $email['email'] = 'janithspera@gmail.com';
        $email['contactEmail'] = $request['email'];
        $email['subject'] = $request['subject'];
        $email['name'] = $request['name'];
        $email['message'] = $request['message'];

        event(new ContactEvent($email));

        $emailThanks['topic'] = "Dear " . $request['name'] . ",";
        $emailThanks['subject'] = 'Thanks To Contact Dhanulak Builders';
        $emailThanks['email'] = $request['email'];
        $emailThanks['content'] = "We will contact soon";

        event(new ContactThanksEvent($emailThanks));

        $response['alert-success'] = 'Contact us sent message set successfully ! ';
        return redirect()->route('index')->with($response);
    }
}
