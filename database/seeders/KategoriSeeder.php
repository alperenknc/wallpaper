<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategories=['Araba','Doga','Uzay','Şehir','Bilim Kurgu','Dünya','Orman'];
        foreach($kategories as $kategoris)
        DB::table('kategoris')->insert([
            'name'=>$kategoris,
            'slug'=>str::slug($kategoris),
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
