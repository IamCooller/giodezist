<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixObjects2405 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('objects', function (Blueprint $table) {
            $table->longText('ContentObject_ru')->change();
            $table->longText('ContentObject_en')->change();
            $table->longText('ContentObject_oz')->change();
        });
        Schema::table('servicesingle', function (Blueprint $table) {
            $table->longText('BlockOneService_en')->change();
            $table->longText('BlockOneService_ru')->change();
            $table->longText('BlockOneService_oz')->change();

            $table->longText('BlockTwoService_en')->change();
            $table->longText('BlockTwoService_ru')->change();
            $table->longText('BlockTwoService_oz')->change();

            $table->longText('BlockThreeService_en')->change();
            $table->longText('BlockThreeService_ru')->change();
            $table->longText('BlockThreeService_oz')->change();

            
        });

        Schema::table('options', function (Blueprint $table) {
            $table->longText('tel2_oz')->change();
            $table->longText('tel2_en')->change();
            $table->longText('tel2_ru')->change();

            $table->longText('address_ru')->change();
            $table->longText('address_en')->change();
            $table->longText('address_oz')->change();
            
        });

        Schema::table('homepage', function (Blueprint $table) {
            $table->longText('achievement_ru')->change();
            $table->longText('achievement_oz')->change();
            $table->longText('achievement_en')->change();

            $table->longText('about_ru')->change();
            $table->longText('about_en')->change();
            $table->longText('about_oz')->change();
            
            $table->longText('ContactPhone_ru')->change();
            $table->longText('ContactPhone_en')->change();
            $table->longText('ContactPhone_oz')->change();

            $table->longText('ContactGraph_oz')->change();
            $table->longText('ContactGraph_en')->change();
            $table->longText('ContactGraph_ru')->change();

            $table->longText('ContactMap_oz')->change();
            $table->longText('ContactMap_en')->change();
            $table->longText('ContactMap_ru')->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('objects');
        Schema::drop('options');
        Schema::drop('homepage');
    }
}
