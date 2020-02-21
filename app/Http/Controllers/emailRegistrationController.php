<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Use Mail
use Mail;

class emailRegistrationController extends Controller
{
    public function sendEmail(Request $req)
    {
        // echo "Hellow email world";
        $emailTo = "David Moftakhar";
        $emailAddress = "david@chillaweb.com";
        $contactName = $req->contactName;
        $contactEmail = $req->contactEmail;
        $contactMessage = $req->contactMessage;
        $data = array('name'=> $contactName, 'email'=> $contactEmail, 'contactMessage' => $contactMessage);
        
        // Mail to ChillaWeb
        Mail::send('email/confirmuser', $data, function($message) use ($emailTo, $emailAddress){
            $message->to($emailAddress)
            ->subject('ChillaWeb contact form submission');
        // echo "Email sent";
        });

        // Confirmation email to user
        Mail::send('email/confirmtouser', $data, function($message) use ($contactName, $contactEmail){
            $message->to($contactEmail)
            ->subject('ChillaWeb contact form submission');
        // echo "Email sent";
        });

        $req->session()->flash('success', 'Your message has been sent. You will receive a response shortly');

        return redirect('/contact');

    }
}
