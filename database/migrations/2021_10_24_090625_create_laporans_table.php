<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pasien_id')->unsigned()->nullable();
            $table->string('kode_pemeriksaan');
            $table->string('tanggal');
            $table->time('waktu');
            $table->string('avg_fhr')->nullable();
            $table->string('avg_toco')->nullable();
            
            $table->foreign('pasien_id')->references('id')->on('pasiens')->cascadeOnDelete();
            
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
        Schema::dropIfExists('laporans');
    }
}
