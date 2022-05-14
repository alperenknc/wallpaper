<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
       return view('admin.index');
    }
    public function login()
    {
       return view('admin.login');
    }
    public function loginpost(Request $request){
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password,'role'=>'kullanici','active'=>'1'])) {
            return redirect()->route('admin.panel');
        }
        return redirect()->route('admin.login')->withErrors('Email adresi veya şifre hatalı!');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
