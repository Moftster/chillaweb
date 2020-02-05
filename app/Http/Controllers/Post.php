<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blogs;

class Post extends Controller
{
    public function index()
    {
        // echo "recreated class";
        return Blogs::all();

    }
}
