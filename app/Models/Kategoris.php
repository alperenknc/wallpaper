<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoris extends Model
{
    protected $table = 'kategoris';
    public function icerikCount(){
        return $this->hasMany('App\Models\Icerik','kategoris_id','id')->count();
    }
}
