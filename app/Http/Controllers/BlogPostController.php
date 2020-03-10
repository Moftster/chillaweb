<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// Import Posts model
use App\Posts;

// Import App model
use App\User;

// User user authentication  
use Auth;


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
        $post->user_id = Auth::user()->id;
        $post->user_name = Auth::user()->name;

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


    function index()
    {
        return Posts::all();
    }

    function viewPosts()
    {

        $data = Posts::
        orderBy('created_at', 'desc')
        ->get();

        return view('blog', ['data' => $data]);

    }

    function viewMyPosts()
    {
        $userID = Auth::user()->id;

        $data = User::orderBy('created_at', 'desc')->find($userID)->myPosts; 

        // $data = Posts::
        // orderBy('created_at', 'desc')
        // ->get();

        return view('myposts', ['data' => $data]);

    }

    public function viewSinglePost($post_id)
    {
        $data = Posts::where('id', '=', $post_id)->get();
        return view('article.view', ['data'=>$data]);
    }

    public function viewPostToEdit($post_id)
    {
        $data = Posts::where('id', '=', $post_id)->get();
        return view('article.edit', ['data'=>$data]);
      
    } 

    public function editPost(Request $req, $post_id)
    {
        $req->validate([
            'title' => 'required | max:100',
            'body' => 'required',
        ]);

        $post = new Posts;
        $post->postname = $req->title;
        $post->postcontent = $req->body;
        $post->user_id = Auth::user()->id;

        // Saving filename to DB and uploading file
        $file = $req->file('image');

        if($file) {
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads', $filename);
            $post->postimage = $filename;

            $data = array(
                'postname' => $post->postname,
                'postcontent' => $post->postcontent,
                'postimage' => $post->postimage
            );
        } else {
            $data = array(
                'postname' => $post->postname,
                'postcontent' => $post->postcontent
            );
        }


        Posts::where('id', $post_id)
        ->update($data);

        $post->update();

        return redirect('/blog');
    }

    public function deletePost($post_id)
    {
        Posts::where('id', $post_id)
        ->delete();
        return redirect('/myposts');
    }
    
}
