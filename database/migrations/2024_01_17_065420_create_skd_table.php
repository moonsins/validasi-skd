<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Vtiful\Kernel\Format;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skd', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat');
            $table->string('nama_dokter');
            $table->string('diagnosa');
            $table->date('tgl_in');
            $table->date('tgl_out');
            $table->timestamps();
            $table->unsignedBigInteger('pasien_id');
            $table->foreign('pasien_id')->references('id')->on('pasien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skd');
    }
};
