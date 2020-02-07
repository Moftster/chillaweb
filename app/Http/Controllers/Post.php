<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class Post extends Controller
{
    public function index()
    {
        // echo "recreated class";
        return Posts::all();

    }
}
