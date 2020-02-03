<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function postSubmit(Request $req)
    {
        $req->validate([
            'title' => 'required | title',
            'body' => 'required | body',
            'image' => 'required | image'
        ]);

        // print_r($req->input());
    }
    
}
