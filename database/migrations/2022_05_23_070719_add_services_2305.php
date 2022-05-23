<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddServices2305 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('services', function (Blueprint $table) {
        $table->increments('id');
        $table->string("title_en")->nullable();
        $table->string("title_oz")->nullable();
        $table->string("title_ru")->nullable();
        $table->string("description_en")->nullable();
        $table->string("description_ru")->nullable();
        $table->string("description_oz")->nullable();
        $table->text("keywords_en")->nullable();
        $table->text("keywords_ru")->nullable();
        $table->text("keywords_oz")->nullable();


        $table->text("ServiceTitle_en")->nullable();
        $table->text("ServiceTitle_ru")->nullable();
        $table->text("ServiceTitle_oz")->nullable();

        $table->text("ServiceImg_ru")->nullable();
        $table->text("ServiceImg_en")->nullable();
        $table->text("ServiceImg_oz")->nullable();
        

        $table->text("ServiceNumber_ru")->nullable();
        $table->text("ServiceNumber_en")->nullable();
        $table->text("ServiceNumber_oz")->nullable();

        $table->timestamp('publish_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        $table->timestamp('created_at')->nullable();

    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::drop('services');
}
}
