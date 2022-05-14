<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Kategoris;
use App\Models\Icerik;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    #\View::share('menuler',Menu::where('category',null)->orderBy('sira','asc')->get()); 
    
    public function __construct(){

        \View::share('kategoris',Kategoris::take(6)->get());
        \View::share('icerikler',Icerik::orderBy('created_at','DESC')->take(6)->get());
    }
    public function test()
    {
       return view('front.test');
    }
}
