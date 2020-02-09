<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// Import Posts model
use App\Posts;

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

        $post = new Posts;
        $post->postname = $req->title;
        $post->postcontent = $req->body;
        // $post->postimage = $req->image;
        $post->posterid = "David Moftakhar";

        // Save image to storage

        // $req->file('image')->store('uploads');

        // if($req->hasfile('image')) {
            $file = $req->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads', $filename);
            $post->postimage = $filename;
            // print_r($filename);
        // } else {
        //     $post->postimage = "No image";

        // }

        $post->save();

        return redirect('/blog');

    }

    public function checkDB()
    {
        $user = DB::select('SELECT * FROM posts');
        // print_r($user);
        return $user;
        echo "Checking Database";
    }

    public function addPost()
    {
        $user = DB::table('posts')
        ->insert([
            'title' => 'New Via Browser',
            'body' => 'New Entering code',
            'image' => 'test image'
        ]);
    }

    public function uploadPost(Request $req)
    {
        // $user = DB::table('posts')
        // ->insert([
        //     'postname' => 'New Via Browser',
        //     'postcontent' => 'New Entering code',
        //     'postimage' => 'test image',
        //     'posterid' => 'test image'

        // ]);

        // // print_r($req->file());

        // echo $req->file('image')->store('public');
        // return "testing controller";

        print_r($req->input());
    }


    function index()
    {
        // return "New connection established";
        return Posts::all();
    }

    function viewPosts()
    {
        // return Posts::all();
        //    return view('blog');
        $data = Posts::all();
        return view('blog', ['data' => $data]);

    }
    
}
