<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'email:rfc,dns',
            'password' => 'required|min:3'
        ]);

        if(Auth::attempt($credentials)){            
            $request->session()->regenerate();
            return redirect('/shop');
        }

        return redirect()->intended('/login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
