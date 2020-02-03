<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function postSubmit(Request $req)
    {
        print_r($req->input('post-body'));
    }
}
