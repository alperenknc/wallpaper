<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
class KullaniciController extends Controller
{
    
    public function index()
    {
        return view('front.kullanici');
    }

    public function store(Request $request)
    {
        try{
            
            $kullanici =new Admin;
            $kullanici->name=$request->name;
            $kullanici->email=$request->email;
            $kullanici->password=bcrypt($request->password);
    

            $kullanici->save();
            toastr()->success('Başarılı', 'İçerik başarıyla oluşturuldu');
            return redirect()->route('kullanici');
        }catch(Exception){
            return "Hata";
        }
        
    }
}
