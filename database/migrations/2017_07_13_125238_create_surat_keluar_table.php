<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_keluar', function (Blueprint $table)
        {
            // $table->integer('id')->increments();
            $table->increments('id')->unsigned();
            $table->integer('id_user');
            $table->binary('image');
            $table->string('mime');
            $table->string('nama_surat');
            $table->dateTime('tanggal_surat');
            $table->string('tag')->nullable();
            $table->string('keterangan')->nullable();
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
        Schema::drop('surat_keluar');
    }
}
