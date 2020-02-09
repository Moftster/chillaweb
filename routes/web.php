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


Route::view('projects', 'projects');

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function() {
    return view('contact');
});


// Post blog to database
Route::view('post', 'post');
Route::post('upload', 'BlogPostController@postSubmit');

// View blog posts
Route::get('blog', 'BlogPostController@viewPosts');

// User login
Route::view('adminlogin', 'login');
Route::post('/userlogin', 'UserLoginController@userLogin');


