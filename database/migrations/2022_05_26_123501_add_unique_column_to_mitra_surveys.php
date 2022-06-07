<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUniqueColumnToMitraSurveys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mitra_surveis', function (Blueprint $table) {
            $table->unique(['id_mitra','id_survei']); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mitra_surveis', function (Blueprint $table) {
            $table->dropUnique(['id_mitra','id_survei']);
        });
    }
}
