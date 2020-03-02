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
    return view('homepage');
});

Route::view('portfolio', 'portfolio');

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function() {
    return view('contact');
});

// Quote page
Route::get('quote', 'QuoteController@index');
Route::post('quotesummary', 'QuoteController@submitQuoteDetails');

// Post blog to database
Route::view('post', 'post');
Route::post('upload', 'BlogPostController@postSubmit');

// View user's blog posts (blog section)
Route::get('blog', 'BlogPostController@viewPosts');

// View individual blog post
Route::get('/view/{id}', 'BlogPostController@viewSinglePost');

// Edit individual blog post
Route::get('/edit/{id}', 'BlogPostController@viewPostToEdit');
Route::post('/update/{id}', 'BlogPostController@editPost');

// View My posts (user)
Route::get('myposts', 'BlogPostController@viewMyPosts');

// Delete post
Route::get('/delete/{id}', 'BlogPostController@deletePost');

// Testing sending email
Route::get('/sendemail', 'emailRegistrationController@sendEmail');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Admin panel
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function() {
    Route::resource('/users', 'UsersController', ['except' => ['show,', 'create', 'store']]);
});
