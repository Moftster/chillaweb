<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index()
    {
        return view('/quote');

    }

    public function summary()
    {
        return view('/quotesummary');

    }
}
