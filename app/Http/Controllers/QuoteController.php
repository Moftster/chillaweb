<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import Quote model
Use App\Quote;

class QuoteController extends Controller
{
    public function index()
    {
        return view('/quote');

    }

    public function submitQuoteDetails(Request $req)
    {
        $estimatedPrice = $_COOKIE['est_price'];
        
        $quote = new Quote;

        $purpose = implode(", ", $req->site_purpose);
        
        $functionality = implode(", ", $req->site_functionality);

        $quote->purpose = $purpose;
        $quote->functionality = $functionality;
        $quote->brand = $req->site_style;
        $quote->timescale = $req->site_timescale;
        $quote->cost = $estimatedPrice;
        $quote->name = $req->contactName;
        $quote->email = $req->contactEmail;
        $quote->telephone = $req->contactPhone;

        $quote->save();

        $req->session()->flash('success', 'The details of your quote have been sent and you will receive a response shortly.');

        return redirect('/quote');

    }
}
