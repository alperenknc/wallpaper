<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icerik', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('kategoris_id');
            $table->string('baslik');
            $table->string('resim');
            $table->longText('yazi');
            $table->integer('hit')->default(0);
            $table->integer('durum')->default(0)->comment('0:Pasif 1:Aktif');
            $table->string('slug');
            $table->timestamps();

            
            $table->foreign('kategoris_id')->references('id')->on('kategoris');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('icerik');
    }
};
