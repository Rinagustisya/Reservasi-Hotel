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
        Schema::create('pesans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tamu');
            $table->string('nama_pemesan'); 
            $table->string('email');
            $table->string('no_hp');
            $table->string('check_in');
            $table->string('check_out');
            $table->string('jenis_kamar');
            $table->string('foto_user');
            $table->integer('jumlah_kamar');
            $table->string('status')->default('Check In');
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
        Schema::dropIfExists('pesans');
    }
};
