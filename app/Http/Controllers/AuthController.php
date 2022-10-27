<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('admin.auth');
    }
    public function login(Request $req)
    {
        if (!auth()->attempt($req->only('email', 'password'))) {
            return redirect('/');
        }
        return redirect('/admin');
    }
}
