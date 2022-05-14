<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategoris;
use App\Models\Icerik;
use Illuminate\Support\Str;

class kategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriler=Kategoris::all() ?? abort(403, ' Bu sayfa yok dostum ');
        return view('admin.kategori.show',compact('kategoriler'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris=Kategoris::all();
        return view('admin.kategori.add',compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            
            $request->validate([
                'name'=>'required|min:3',
                'resim' => 'required|mimes:png,jpg, jpeg, png, bmp, gif,webp,image,svg|dimensions:svg|max:4048',
            ]);

            $kategori =new Kategoris;
            $kategori->name=$request->name;
            $kategori->kategoriRenk=$request->kategoriRenk;
            $kategori->slug=Str::slug($request->name);
    
            if($request->hasFile('resim')){
                $resimN=Str::slug($request->name).'.'.$request->resim->getClientOriginalExtension();
                $request->resim->move(public_path('uploads'),$resimN);
                $kategori->resim='uploads/kategoriler/'.$resimN;
            }

            $kategori->save();
            toastr()->success('Başarılı', 'İçerik başarıyla oluşturuldu');
            return redirect()->route('kategori.create');
        }catch(Exception){
            return "Hata";
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
