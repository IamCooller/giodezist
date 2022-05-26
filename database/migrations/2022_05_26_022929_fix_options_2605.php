<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixOptions2605 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('options', function (Blueprint $table) {
      
            $table->text('google_analyt')->nullable();
            $table->text('yandex_met')->nullable();
            $table->text('nip')->nullable();
            $table->text('favicon')->nullable();


        });    //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('options', function (Blueprint $table) {
            //
        });
    }
}
