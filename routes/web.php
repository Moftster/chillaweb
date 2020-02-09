<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

// Route::get('/blog', function () {
//     return view('blog');
// });

// Route::get('/projects', function () {
//     return view('projects');
// });

Route::view('projects', 'projects');

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/post', function() {
    return view('post');
});

Route::view('/post', 'post');
Route::post('/blogpostcontroller', 'BlogPostController@postSubmit');
Route::get('dbcheck', 'BlogPostController@checkDB');
Route::get('dbpost', 'BlogPostController@addPost');
Route::get('modeltest', 'Post@index'); 

//uploading file
Route::view('imageform', 'post');
Route::post('upload', 'BlogPostController@uploadImage');

// Eloquent practice
Route::get('/eloquent', 'BlogPostController@index');

// View blog posts
Route::get('blog', 'BlogPostController@viewPosts');

Route::view('adminlogin', 'login');
Route::post('/userlogin', 'UserLoginController@userLogin');


