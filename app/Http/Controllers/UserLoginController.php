<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    public function userLogin(Request $req) {
        $req->validate([
            'username' => 'required | username',
            'email' => 'required | email'
        ]);

        // print_r($req->input());
    }
}
