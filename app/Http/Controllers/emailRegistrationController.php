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
        $emailTo = "New Signer";
        $emailAddress = "d_moftakhar@hotmail.com";
        $data = array('name'=>'Mr Jones', 'body'=>'Test message');
        Mail::send('mail', $data, function($message) use ($emailTo, $emailAddress){
            $message->to($emailAddress)
            ->subject('Lara mail subject');
        });
    }
}
