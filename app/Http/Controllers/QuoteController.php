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
        $quote = new Quote;

        // $quote->purpose = $req->site_purpose;
        // $quote->functionality = $req->site_functionality;
        // $quote->brand = $req->site_style;
        // $quote->timescale = $req->site_timescale;
        // $quote->cost = $req->estimated_price;
        // $quote->name = $req->contactName;
        // $quote->email = $req->contactEmail;
        // $quote->telephone = $req->contactPhone;
 
        $quote->purpose = $req->site_purpose;
        $quote->functionality = $req->site_functionality;
        $quote->brand = $req->site_style;
        $quote->timescale = $req->site_timescale;
        $quote->cost = 100;
        $quote->name = $req->contactName;
        $quote->email = $req->contactEmail;
        $quote->telephone = $req->contactPhone;

        $quote->save();
        
        return redirect('/');

    }
}
