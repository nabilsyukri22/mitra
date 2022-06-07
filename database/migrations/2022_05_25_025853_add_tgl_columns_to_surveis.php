<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTglColumnsToSurveis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('surveis', function (Blueprint $table) {
                $table->date('tgl_mulai')->nullable();
                $table->date('tgl_akhir')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('surveis', function (Blueprint $table) {
            $table->dropColumn('tgl_mulai');
            $table->dropColumn('tgl_akhir');
        });
    }
}
