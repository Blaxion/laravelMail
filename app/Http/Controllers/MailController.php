<?php

namespace App\Http\Controllers;

use App\Mail\Contactus;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contactUS(){
        $mail_details= [
            // "subject" => $request->subject,
            // "content" => $request->content
            "subject" => "subject here",
            "img" => "img",
            "content" => "***content here***"
        ];
        // Mail::to('khibaziev.smurf@gmail.com')->send(new Contactus($mail_details));
        Mail::send('mails.contactUS', 
            $mail_details
        , function($message) {
            $message
                ->to('latheesan@domain.com')
                ->from(Auth::user()->email)
                ->subject(Auth::user()->email);
        });
    }
}
