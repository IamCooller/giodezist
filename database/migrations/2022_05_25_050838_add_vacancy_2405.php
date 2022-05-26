<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVacancy2405 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancy', function (Blueprint $table) {
            $table->increments('id');

            $table->text("title_en")->nullable();
            $table->text("title_oz")->nullable();
            $table->text("title_ru")->nullable();

            $table->text("subtitle_en")->nullable();
            $table->text("subtitle_oz")->nullable();
            $table->text("subtitle_ru")->nullable();


            $table->longText("content_en")->nullable();
            $table->longText("content_ru")->nullable();
            $table->longText("content_oz")->nullable();


            $table->timestamp('publish_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
            
        });    //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vacancy', function (Blueprint $table) {
            //
        });
    }
}
