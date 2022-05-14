<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategoris;
use App\Models\Icerik;
use Illuminate\Support\Str;

class icerikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $icerikler=Icerik::all() ?? abort(403, ' Bu sayfa yok dostum ');
        return view('admin.icerikler.show',compact('icerikler'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris=Kategoris::all();
        $icerikcount=Icerik::all();
        return view('admin.icerikler.add',compact('kategoris','icerikcount'));
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
                'baslik'=>'required|min:3',
                'resim' => 'required|mimes:png,jpg, jpeg, png, bmp, gif,webp,image,svg|dimensions:svg|max:4048',
            ]);

            $icerik =new Icerik;
            $icerik->baslik=$request->baslik;
            $icerik->kategoris_id=$request->kategoris_id;
            $icerik->yazi=$request->yazi;
            $icerik->slug=Str::slug($request->baslik);
    
            if($request->hasFile('resim')){
                $resimN=Str::slug($request->baslik).'.'.$request->resim->getClientOriginalExtension();
                $request->resim->move(public_path('uploads'),$resimN);
                $icerik->resim='uploads/icerikler/'.$resimN;
            }

            $icerik->save();
            toastr()->success('Başarılı', 'İçerik başarıyla oluşturuldu');
            return redirect()->route('icerikler.create');
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
