<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategoris;
use App\Models\Icerik;

class HomeController extends Controller
{
    public function index()
    {
       return view('front.index');
    }
    
    public function icerik($slug)
    {
        $kategori=Kategoris::where('slug',$slug)->first() ?? abort(403, ' Bu sayfa yok dostum ');
        $icerik = Icerik::orderBy('created_at','DESC')->where('kategoris_id','=',$kategori->id)->get() ;
        
        return view('front.icerik',compact('icerik'));
    }
}
