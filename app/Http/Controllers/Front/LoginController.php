<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login_form()
    {
        return view('front.login');
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password,'role'=>'kullanici'])) {
            return redirect()->route('kullanici');
        }
        return redirect()->route('login')->withErrors('Email adresi veya şifre hatalı!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
