<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMitrasTable extends Migration
{
    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitras', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->string('jk');
            $table->string('nik');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('umur');
            $table->string('perkawinan');
            $table->string('domisili');
            $table->string('kelurahan');
            $table->string('pendidikan');
            $table->string('nowa');
            $table->string('email');
            $table->string('pekerjaan');
            $table->string('pengalaman');
            $table->string('motor');
            $table->string('hp');
            $table->string('ram');
            $table->string('android');
            $table->string('zoom');
            $table->string('pasfoto');
            $table->string('ktp');
            $table->string('ijazah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mitras');
    }
}