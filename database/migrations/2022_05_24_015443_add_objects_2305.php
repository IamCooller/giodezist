<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddObjects2305 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('objects', function (Blueprint $table) {
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


        $table->text("TitleObject_en")->nullable();
        $table->text("TitleObject_ru")->nullable();
        $table->text("TitleObject_oz")->nullable();

        $table->text("SubTitleObject_en")->nullable();
        $table->text("SubTitleObject_ru")->nullable();
        $table->text("SubTitleObject_oz")->nullable();

        $table->text("ObjectImg_ru")->nullable();
        $table->text("ObjectImg_en")->nullable();
        $table->text("ObjectImg_oz")->nullable();

        $table->text("ObjectNumber_ru")->nullable();
        $table->text("ObjectNumber_en")->nullable();
        $table->text("ObjectNumber_oz")->nullable();

        $table->text("ContentObject_en")->nullable();
        $table->text("ContentObject_ru")->nullable();
        $table->text("ContentObject_oz")->nullable();

        $table->text("PhotosObject_en")->nullable();
        $table->text("PhotosObject_ru")->nullable();
        $table->text("PhotosObject_oz")->nullable();

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
    Schema::drop('objects');
}
}
