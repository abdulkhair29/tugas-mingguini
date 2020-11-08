<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelAbsensi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblabsensi', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('jadwal_id');
            $table->string("nim",12);
            $table->date('tgl');
            $table->enum('hadir',['h','a','i','s']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblabsensi');
    }
}
