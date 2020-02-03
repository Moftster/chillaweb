<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    public function userLogin(Request $req) {
        $req->validate([
            'email' => 'required | email'
        ]);
    }
}
