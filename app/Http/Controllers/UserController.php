<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import User model
use App\User;

class UserController extends Controller
{
    function index()
    {
        // echo "Code will be here";
        return User::find(1)->myPosts; 
    }
}
