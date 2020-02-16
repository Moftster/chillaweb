<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Use Mail
use Mail;

class emailRegistrationController extends Controller
{
    public function sendEmail()
    {
        // echo "Hellow email world";
        $emailTo = "David Moftakhar";
        $emailAddress = "david@chillaweb.com";
        $data = array('name'=>'Mr Jones', 'email'=>'job@test.com');
        Mail::send('email/confirmuser', $data, function($message) use ($emailTo, $emailAddress){
            $message->to($emailAddress)
            ->subject('ChillaWeb user registration');
        // echo "Email sent";
        });
    }
}
