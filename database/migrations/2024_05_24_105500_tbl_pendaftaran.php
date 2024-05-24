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
        Schema::create('tbl_pendaftaran', function (Blueprint $table) {
            $table->id('id_pendaftaran');
            $table->string('nama_pendaftaran');
            $table->unsignedBigInteger('id_jurusan');
            $table->unsignedBigInteger('id_eskul');
            $table->foreign('id_eskul')->references('id_eskul')->on('tbl_eskul');
            $table->foreign('id_jurusan')->references('id_jurusan')->on('tbl_jurusan');
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
        Schema::dropIfExists('tbl_pendaftaran');
    }
};
