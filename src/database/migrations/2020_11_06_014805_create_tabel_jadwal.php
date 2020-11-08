<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelJadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbljadwal', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kelas_id');
            $table->bigInteger('matkul_id');
            $table->string("nidn",9);
            $table->string("noruang",4);
            $table->enum('jeniskelamin',['senin','selasa','rabu','kamis','jumat','sabtu']);
            $table->enum('sesi',['1','2']);
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
        Schema::dropIfExists('tbljadwal');
    }
}
