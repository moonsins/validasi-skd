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
        Schema::create('ds', function (Blueprint $table) {
            $table->id();
            $table->string('hash');
            $table->string('qrcode');
            $table->unsignedBigInteger('skd_id');
            $table->foreign('skd_id')->references('id')->on('skd');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ds');
    }
};
