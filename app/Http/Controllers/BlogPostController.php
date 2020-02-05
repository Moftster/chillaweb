<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogPostController extends Controller
{
    public function postSubmit(Request $req)
    {
        // echo "Connection to DB working";

        // $req->validate([
        //     'title' => 'required | max:60',
        //     'body' => 'required | body',
        //     'image' => 'required | image'
        // ]);

        // print_r($req->input());
    }

    public function checkDB()
    {
        $user = DB::select('SELECT * FROM blog');
        print_r($user);
        return $user;
        echo "Checking Database";
    }

    public function addPost()
    {
        $user = DB::table('blog')
        ->insert([
            'title' => 'New Via Browser',
            'body' => 'New Entering code',
            'image' => 'test image'
        ]);
    }

    
}
