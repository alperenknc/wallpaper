<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icerik extends Model
{
    // use HasFactory;
    protected $table = 'icerik';
    // protected $fillable = [
    //     'baslik',
    //     'resim',
    //     'yazi',
    //     'slug',
    //     'kategoris_id',
    // ];
   /*  function  getKategori(){
        return $this->hasOne('App\Models\Kategoris','id','kategoris_id');
    } */
    
}
