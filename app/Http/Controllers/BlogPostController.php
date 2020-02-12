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
        $req->validate([
            'title' => 'required | max:100',
            'body' => 'required',
            'image' => 'required'
        ]);

        $post = new Posts;
        $post->postname = $req->title;
        $post->postcontent = $req->body;
        $post->posterid = "David Moftakhar";

        // Saving filename to DB and uploading file
        $file = $req->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads', $filename);
        $post->postimage = $filename;

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

        $data = Posts::
        orderBy('created_at', 'desc')
        ->get();

        return view('blog', ['data' => $data]);

    }

    function viewMyPosts()
    {
        // return Posts::all();
        //    return view('blog');
        $data = Posts::all();

        $data = Posts::
        orderBy('created_at', 'desc')
        ->get();

        return view('myposts', ['data' => $data]);

    }

    public function viewSinglePost($post_id)
    {
        $data = Posts::where('id', '=', $post_id)->get();
        return view('article.view', ['data'=>$data]);
    }

    public function editPost($id)
    {
        $post = Posts::find($id);
    }
    
}
